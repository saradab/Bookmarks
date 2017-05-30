<?php
/**
 * Bookmark repository.
 */
namespace Repository;

use Doctrine\DBAL\Connection;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\DoctrineDbalAdapter;

/**
 * Class TagRepository.
 *
 * @package Repository
 */
class BookmarkRepository
{
    /**
     * Number of items per page.
     *
     * const int NUM_ITEMS
     */
    const NUM_ITEMS = 2;
    /**
     * Doctrine DBAL connection.
     *
     * @var \Doctrine\DBAL\Connection $db
     */
    protected $db;

    /**
     * TagRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */

    /**
     * Tag repository.
     *
     * @var null|\Repository\TagRepository $tagRepository
     */
    protected $tagRepository = null;

    /**
     * TagRepository constructor.
     *
     * @param \Doctrine\DBAL\Connection $db
     */
    public function __construct(Connection $db)
    {
        $this->db = $db;
        $this->tagRepository = new TagRepository($db);
    }

    /**
     * Fetch all records.
     *
     * @return array Result
     */
    public function findAll()
    {
        $queryBuilder = $this->queryAll();

        return $queryBuilder->execute()->fetchAll();
    }

    /**
     * Get records paginated.
     *
     * @param int $page Current page number
     *
     * @return array Result
     */
    public function findAllPaginated($page)
    {
        $countQueryBuilderModifier = function ($queryBuilder) {
            $queryBuilder->select('COUNT(DISTINCT t.id) AS total_results')
                ->setMaxResults(1);
        };

        $adapter = new DoctrineDbalAdapter($this->queryAll(), $countQueryBuilderModifier);

        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(self::NUM_ITEMS);
        $pagerfanta->setCurrentPage($page);

        return $pagerfanta;
    }
    /**
     * Find one record.
     *
     * @param string $id Element id
     *
     * @return array|mixed Result
     */
    public function findOneById($id)
    {
        $queryBuilder = $this->queryAll();
        $queryBuilder->where('b.id = :id')
            ->setParameter(':id', $id, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetch();

        if ($result) {
            // TODO: remove current() after multi select implementation
            $result['tags'] = current($this->findLinkedTagsIds($result['id']));
        }

        return $result;
    }

    /**
     * Save record.
     *
     * @param array $bookmark Bookmark
     *
     * @throws \Doctrine\DBAL\DBALException
     */
    public function save($bookmark)
    {
        $this->db->beginTransaction();

        try {
            $currentDateTime = new \DateTime();
            $bookmark['modified_at'] = $currentDateTime->format('Y-m-d H:i:s');
            $tagsIds = isset($bookmark['tags']) ? $bookmark['tags'] : [];
            unset($bookmark['tags']);

            if (isset($bookmark['id']) && ctype_digit((string) $bookmark['id'])) {
                // update record
                $bookmarkId = $bookmark['id'];
                unset($bookmark['id']);
                $this->removeLinkedTags($bookmarkId);
                $this->addLinkedTags($bookmarkId, $tagsIds);
                $this->db->update('si_bookmarks', $bookmark, ['id' => $bookmarkId]);
            } else {
                // add new record
                $bookmark['created_at'] = $currentDateTime->format('Y-m-d H:i:s');

                $this->db->insert('si_bookmarks', $bookmark);
                $bookmarkId = $this->db->lastInsertId();
                $this->addLinkedTags($bookmarkId, $tagsIds);
            }
            $this->db->commit();
        } catch (DBALException $e) {
            $this->db->rollBack();
            throw $e;
        }
    }
    /**
     * Remove record.
     *
     * @param array $tag Tag
     *
     * @return boolean Result
     */
    public function delete($bookmark)
    {
        try {
            $this->removeLinkedTags($bookmark['id']);
            $this->db->delete('si_bookmarks', ['id' => $bookmark['id']]);
            $this->db->commit();
        } catch (DBALException $e) {
            $this->db->rollBack();
            throw $e;
        }
    }

    /**
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    /**
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    /**
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    protected function queryAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select(
            't.id',
            't.created_at',
            't.modified_at',
            't.title',
            't.url',
            't.is_public'
        )->from('si_bookmarks', 't');
    }


    /**
     * Finds linked tags Ids.
     *
     * @param int $bookmarkId Bookmark Id
     *
     * @return array Result
     */
    protected function findLinkedTagsIds($bookmarkId)
    {
        $queryBuilder = $this->db->createQueryBuilder()
            ->select('bt.tag_id')
            ->from('si_bookmarks_tags', 'bt')
            ->where('bt.bookmark_id = :bookmark_id')
            ->setParameter(':bookmark_id', $bookmarkId, \PDO::PARAM_INT);
        $result = $queryBuilder->execute()->fetchAll();

        return isset($result) ? array_column($result, 'tag_id') : [];
    }

    /**
     * Remove linked tags.
     *
     * @param int $bookmarkId Bookmark Id
     *
     * @return boolean Result
     */
    protected function removeLinkedTags($bookmarkId)
    {
        return $this->db->delete('si_bookmarks_tags', ['bookmark_id' => $bookmarkId]);
    }

    /**
     * Add linked tags.
     *
     * @param int $bookmarkId Bookmark Id
     * @param array $tagsIds Tags Ids
     */
    protected function addLinkedTags($bookmarkId, $tagsIds)
    {
        if (!is_array($tagsIds)) {
            $tagsIds = [$tagsIds];
        }

        foreach ($tagsIds as $tagId) {
            $this->db->insert(
                'si_bookmarks_tags',
                [
                    'bookmark_id' => $bookmarkId,
                    'tag_id' => $tagId,
                ]
            );
        }
    }
}
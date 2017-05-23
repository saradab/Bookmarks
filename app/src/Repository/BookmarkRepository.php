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
    public function __construct(Connection $db)
    {
        $this->db = $db;
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
        $queryBuilder->where('t.id = :id')
            ->setParameter(':id', $id);
        $result = $queryBuilder->execute()->fetch();

        return !$result ? [] : $result;
    }
    /**
     * Save record.
     *
     * @param array $tag Tag
     *
     * @return boolean Result
     */
    public function save($bookmark)
    {
        if (isset($bookmark['id']) && ctype_digit((string) $bookmark['id'])) {
            // update record
            $id = $bookmark['id'];
            unset($bookmark['id']);

            return $this->db->update('si_bookmarks', $bookmark, ['id' => $id]);
        } else {
            // add new record
            return $this->db->insert('si_bookmarks', $bookmark);
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
        if(isset($bookmark['id']) && ctype_digit((string) $bookmark['id'])) {
            return $this->db->delete('si_bookmarks', $bookmark);
        } else {
            throw new \InvalidArgumentException('Invalid parameter type');
        }
    }

    /**
     * Query all records.
     *
     * @return \Doctrine\DBAL\Query\QueryBuilder Result
     */
    protected function queryAll()
    {
        $queryBuilder = $this->db->createQueryBuilder();

        return $queryBuilder->select('t.id', 't.title', 't.url')
            ->from('si_bookmarks', 't');
    }
}
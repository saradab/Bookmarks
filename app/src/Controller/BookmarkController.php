<?php
/**
 * Bookmark controller.
 *
 * @copyright (c) 2016 Tomasz Chojna
 * @link http://epi.chojna.info.pl
 */

namespace Controller;

use Model\Bookmarks\Arr\Bookmarks;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class HelloController.
 *
 * @package Controller
 */
class BookmarkController implements ControllerProviderInterface
{
    /**
     * Routing settings.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return \Silex\ControllerCollection Result
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->get('/', [$this, 'indexAction'])->bind('bookmark_index');
        $controller->get('/{id}', [$this, 'viewAction'])->bind('bookmark_view');

        return $controller;
    }
    /**
     * Index action.
     *
     * @param \Silex\Application $app Silex application
     *
     * @return string Response
     */
    public function indexAction(Application $app)
    {
        $bookmarkModel = new Bookmarks();

        return $app['twig']->render(
            'bookmark/index.html.twig',
            ['bookmarks' => $bookmarkModel->findAll()]
        );
    }

    public function viewAction(Application $app, Request $request)
    {
        $bookmarkModel = new Bookmarks();

        $id = $request->get('id');

        return $app['twig']->render(
            'bookmark/view.html.twig',
            ['bookmark' => $bookmarkModel->findOneById($id),
            'id' => $id]
        );
    }
}
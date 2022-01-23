<?php


namespace app\controller;

use app\core\Pagination;
use app\model\CategoryModel;
use app\model\MainModel;
use app\model\PostModel;
use R;
use app\core\App;
use app\model\CommentModel;

class MainController extends AppController
{

    public string $layout = 'default';  //main

    public function index(){
        /*
        $posts = App::$app->cache->getCache('posts');
        if(!$posts){
            $posts = R::findAll('posts');
            App::$app->cache->setCache('posts', $posts, 3600*24);
        }
        */
        //////////// pageno /////////
        $page = isset($_GET['page']) ? (int)$_GET['page']: 1;
        $total = R::count('posts');
        $limit = 2;
        $pageno = new Pagination($page, $limit, $total);
        $start = $pageno->pagStart();
        $posts = R::findAll('posts', "LIMIT $start, $limit");
        /////////////////////////////


        $this->setMeta('MainPage','описание страницы','ключевые слова');
        //$this->setMeta($post->title,$post->content);
        $menu = $this->navMenu;
        $meta = $this->meta;
        $this->setVars(compact('posts', 'menu', 'meta', 'pageno', 'start'));
    }


    public function single(){
        $menu = $this->navMenu;
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $post = R::findOne('posts', "id = ? LIMIT 1", [$id]);
            $comments = R::findAll('comments', 'post_id = ?', [$id]);
            $commentCount = R::count('comments', 'WHERE post_id = ?', [$id]);
            $this->setVars(compact('post', 'comments', 'commentCount', 'menu'));
        }
    }


    public function about(){
        $menu = $this->navMenu;
        $this->setVars(compact('menu'));
    }

    public function category(){

    }

}
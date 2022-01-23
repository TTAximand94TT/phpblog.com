<?php


namespace app\controller;


use app\model\PostModel;
use R;

class PostController extends AppController
{

    /*
    public function single(){
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $post = R::findOne('posts', "id = ? LIMIT 1", [$id]);
            $comments = R::findAll('comments', 'post_id = ?', [$id]);
            $commentCount = R::count('comments', 'WHERE post_id = ?', [$id]);
            $this->setVars(compact('post', 'comments', 'commentCount'));
        }
    }
    */

    public function like(){
        if(!empty($_SESSION['user'])){
            if(!empty($_GET['id'])){
                $postModel = new PostModel();
                $id = $_GET['id'];
                $postModel->setLike($id);
                redirect('/');
            }
        }else{
            redirect('/');
        }

    }

    public function dislike(){
        if(!empty($_SESSION['user'])){
            if(!empty($_GET['id'])){
                $postModel = new PostModel();
                $id = $_GET['id'];
                $postModel->setDislike($id);
                redirect('/');
            }
        }else{
            redirect('/');
        }
    }


}
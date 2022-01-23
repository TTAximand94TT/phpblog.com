<?php


namespace app\controller\admin;

use app\model\PostModel;

use app\model\UserModel;
use R;

class PostsController extends AppController
{
    //public string $layout = 'admin';

    /*
    public $model;
    public function __construct($route)
    {
        parent::__construct($route);
        $this->model = new PostModel();
    }
    */

    public function index(){

        $postModel = new PostModel();
        $userModel = new UserModel();
        $posts = $postModel->allPosts();
        $this->setVars(compact('posts'));
    }

    public function create(){
        if(!empty($_POST)){
            $postModel = new PostModel();
            $data = $_POST;
            $data['user_id'] = $_SESSION['user']['id'];
            $data['is_published'] = isset($data['is_published'])? 'yes':'no';
            $postModel->load($data);
            $postModel->save('posts');
            redirect('/admin/posts');
        }
    }

    public function store(){

    }

    public function edit(){
        if(!empty($_GET['id'])){
            $postModel = new PostModel();
            $id = $_GET['id'];
            $post = $postModel->onePost($id);
            $this->setVars(compact('post'));
        }
    }

    public function update(){
         if(!empty($_POST)){
             $data = $_POST;
             debug($data);
             die;
         }
    }

    public function delete(){
        if(!empty($_GET['delete_id'])){
            $postModel = new PostModel();
            $id = $_GET['delete_id'];
            $postModel->delete($id);
            redirect('/admin/posts');
        }
    }
}
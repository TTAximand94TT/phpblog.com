<?php
namespace app\controller\user;

use app\core\Model;
use app\model\PostModel;
use R;

class PostController extends AppController
{

    public $model;

    public function __construct($route)
    {
        parent::__construct($route);
        $this->model = new PostModel();
    }

    public function create(){

    }


    public function store(){
        if(!empty($_POST)){
            $post = new PostModel();
            $data = $_POST;
            $data['is_published'] = isset($data['is_published']) ? 'yes':'no';
            $data['user_id'] = $_SESSION['user']['id'];
            $post->load($data);
            $post->save('posts');
            redirect('/user');

        }
    }

    public function edit(){
        if(!empty($_GET)){
            $id = $_GET['id'];
            $post = R::findOne('posts', 'id = ?', [$id]);
            $this->setVars(compact('post'));
        }
    }

    public function update(){
        if(!empty($_POST)){
            $post = new PostModel();
            $data = $_POST;
            $data['is_published'] = isset($data['is_published']) ? 'yes':'no';
            $post->load($data);
            $post->update($data['id'], 'posts');
            redirect('/user');
        }

    }

    public function delete(){
        if(!empty($_GET)){
            $id = $_GET['id'];
            $this->model->delete($id);
            redirect('/user');
        }
    }

}
<?php
namespace app\controller\user;

use app\model\UserModel;
use app\model\PostModel;
use R;

class MainController extends AppController
{

    public function index(){
        $model = new PostModel();
        $user = UserModel::getUserInfo();
        $id = $user['id'];
        $userPosts = $model->getUserPosts($id);
        $postsCount = $model->getUserPostsCount($id);
        $this->setVars(compact('user', 'postsCount', 'userPosts'));
    }

}
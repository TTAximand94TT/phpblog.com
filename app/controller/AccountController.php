<?php


namespace app\controller;


use app\core\Model;
use app\model\UserModel;

class AccountController extends AppController
{
    public string $layout = 'default';

    public function index(){

    }

    public function registration(){
        $menu = $this->navMenu;
        $this->setVars(compact('menu'));

        if(!empty($_POST)){
            $user = new UserModel();
            $data = $_POST;
            //debug($data);
            $user->load($data);
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            $user->save('users');
            redirect('/');
        }
    }

    public function login(){
        $menu = $this->navMenu;
        $this->setVars(compact('menu'));

        if(!empty($_POST)){
            $user = new UserModel();
            if($user->userLogin() && UserModel::isAdmin()==false){
                redirect('/user/main');
            }else{
                redirect('/main/index');
            }
        }
    }

    public function logout(){
        if(isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect('/main/index');
    }

    public function edit(){

    }

    public function update(){

    }

}
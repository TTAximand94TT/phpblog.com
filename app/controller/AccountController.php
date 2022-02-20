<?php


namespace app\controller;


use app\core\Model;
use app\core\traits\updateUser;
use app\lib\File;
use app\model\UserModel;
use R;
use app\lib\Mail;

class AccountController extends AppController
{

    public string $layout = 'default';

    public function index(){

    }

    // переделать!
    public function registration(){
        if(!empty($_POST)){
            $user = new UserModel();
            $file = new File();
            $data = $_POST;
            /////////////////////////////// activation message  //////////////////////////////
            $email = $data['email'];
            $activation=md5($email.time());
            $data['activation'] = $activation;
            Mail::verificationMail($email, $activation);
            //////////////////////////////// activation message end  ////////////////////////
            ///////////////////////////////  avatar  /////////////////////////////////////
            if($_FILES && $_FILES['avatar']['error']==UPLOAD_ERR_OK){
                $file_name = time().$_FILES['avatar']['name'];
                $file->upload($_FILES['avatar']['name'], $_FILES['avatar']['tmp_name'], 'img/user_avatar/');
                $data['avatar'] = $file_name;
            }
            /////////////////////////////// avatar end  //////////////////////////////////

            $user->load($data);
            $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            $user->save('users');
            redirect('/account/verification');
        }
    }

    // переделать!
    public function activation(){
        if(!empty($_GET['code'])){
            //debug($_GET);
            //exit();
            $code=($_GET['code']);
            $query = R::exec("SELECT id FROM users WHERE activation = '$code'");
            if($query){
                $count = R::exec("SELECT id FROM users WHERE activation = '$code' AND verification = '0'");
                if($count){
                    $verification = R::exec("UPDATE users SET verification = '1' WHERE activation = '$code'");
                    redirect('/account/login');
                }
            }
        }
        redirect('/main');

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
        if(!empty($_GET['id'])){
            $id = $_GET['id'];
            $userModel = new UserModel();
            $user = $userModel->getUser($id);
            $this->setVars(compact('user'));
        }
    }

    /////////
    public function update(){
        if(!empty($_POST)){
            $user = new UserModel();
            $data = $_POST;
            $user->load($data);
            $user->update($user['id'], 'users');
            redirect('/user/main');
        }
    }

    public function updateName(){
        $user = new UserModel();
        if(!empty($_POST)){
            $id = $_POST['id'];
            $data = $_POST['name'];
            $user->updateName($id, $data);
            redirect('/user/main');
        }
    }

    public function updateLogin(){
        $user = new UserModel();
        if(!empty($_POST)){
            $id = $_POST['id'];
            $data = $_POST['login'];
            $user->updateLogin($id, $data);
            redirect('/user/main');
        }
    }

    public function updateEmail(){
        $user = new UserModel();
        if(!empty($_POST)){
            $id = $_POST['id'];
            $data = $_POST['email'];
            $user->updateEmail($id, $data);
            redirect('/user/main');
        }
    }

    public function updateAvatar(){
        if(isset($_POST) && $_FILES && $_FILES['new_avatar']['error']==UPLOAD_ERR_OK){
            $file = new File();
            $query = R::findOne('users', "id = {$_POST['id']}");
            $old_avatar = $query['avatar'];
            //debug($old_avatar);
            //exit();
            $file_name = $file->upload($_FILES['new_avatar']['name'], $_FILES['new_avatar']['tmp_name'],'img/user_avatar/');
            if($file_name){
                R::exec("UPDATE users SET avatar = '$file_name' WHERE id = {$_POST['id']}");
                $file->delete($old_avatar, 'img/user_avatar/');
            }
            redirect('/user/main');
        }
    }

    public function verification(){

    }



}
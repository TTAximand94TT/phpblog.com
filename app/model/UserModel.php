<?php


namespace app\model;


use app\core\Model;
use R;

class UserModel extends Model
{
    public array $attributes = [
        'login'=>'',
        'password'=>'',
        'email'=>'',
        'name'=>'',
        'role'=>'user'
    ];


    public function checkUnique(): bool
    {
        $u = \R::findOne('users', 'login = ? OR email = ? LIMIT 1',
                        [$this->attributes['login'], $this->attributes['email']]);
        if($u){
            return false;
        }else{
            return true;
        }
    }

    public function userLogin(){
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if($login && $password){
            $user = \R::findOne('users', 'login = ? LIMIT 1', [$login]);
            if($user){
                if(password_verify($password, $user['password'])){
                    foreach($user as $key => $value){
                        if($key!='password') $_SESSION['user'][$key] = $value;
                    }
                    return true;
                }
            }
        }
        return false;
    }

    public static function isAdmin(){
        return (isset($_SESSION['user']) && $_SESSION['user']['role']=='admin');
    }

    public static function getUserInfo(){
        if(isset($_SESSION['user'])){
            foreach($_SESSION['user'] as $key => $value){
                $user[$key] = $value;
            }
            return $user;
        }
        return false;
    }

    public function getUsersCount(): int
    {
        return $count = R::count('users');
    }

    public function showAllUser(): array
    {
        return $users = R::findAll('users');
    }

    public function delete($id){
        if($userDel = R::load('users', $id)){
            R::trash($userDel);
            return true;
        }
    }

    public function getUser($id){
        return $user = R::load('users', $id);
    }

}
<?php
namespace app\model;

use app\core\Model;

use R;

class PostModel extends Model
{
    protected $table = 'posts';

    public array $attributes = [
        'title'=>'',
        'content'=>'',
        'title_img'=>'',
        'is_published'=>'',
        'category_id'=>'',
        'user_id' => ''
    ];

    // all users posts
    public function getUsersPostsCount(): int
    {
        return $count = R::count('posts');
    }

    // one user posts
    public function getUserPostsCount($userId): int
    {
        return $count = R::count('posts', 'user_id = ?',[$userId]);
    }

    public function getUserPosts($userId): array
    {
        return $posts = R::findAll('posts', 'user_id = ?', [$userId]);
    }

    public function delete($id){
        if($postDel = R::load('posts', $id)){
            R::trash($postDel);
            return true;
        }
    }

    public function allPosts(): array
    {
        return $posts = R::findAll('posts');
    }

    public function onePost($id){
        return $post = R::findOne('posts', 'WHERE id = ? LIMIT 1', [$id]);
    }


    public function setLike($post_id){
        R::exec("UPDATE `posts` SET `rating` = `rating`+1 WHERE `id` = ?;", [$post_id]);
    }

    public function setDislike($post_id){
        R::exec("UPDATE `posts` SET `rating` = `rating`-1 WHERE `id` = ?;", [$post_id]);
    }
}
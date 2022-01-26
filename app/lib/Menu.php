<?php


namespace app\lib;


use R;
use app\core\DB;
use app\model\CategoryModel;

class Menu{
    public $data;

    public function __construct(){
        $this->run();
    }


    public function run(){
        //$this->data = R::getAssoc('SELECT * FROM category');
        $this->data = R::findAll('category');

        echo $this->getMenuHTML();
    }

    /*
    public function getMenuHTML(){
        echo "<ul class='nav flex-column'>";
        foreach($this->data as $category){
            echo "<li class='nav-item'>
                      <a title='{$category['description']}' class='nav-link' href='/main/category'>{$category['title']}</a>
                  </li>";
        }
        echo "</ul>";
    }
    */

    public function getMenuHTML(){
        $str = '';
        foreach($this->data as $category){
            $str .= $this->catToTemple($category);
        }
        return $str;
    }


    /////////////////////////////////////////////

    public function catToTemple($category){
        ob_start();
        require(ROOT.'app/view/widgets/menu.php');
        return ob_get_clean();
    }

}

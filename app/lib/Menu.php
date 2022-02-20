<?php


namespace app\lib;


use R;
use app\core\DB;
use app\model\CategoryModel;

class Menu{
    public $data;

    public string $templatePath;

    public function __construct(){
        $this->templatePath = ROOT.'app/view/widgets/menu.php';
        $this->data = R::findAll('category');
        $this->run();
    }


    public function run(){
        //$this->data = R::getAssoc('SELECT * FROM category');
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
        foreach($this->data as $item){
            $str .= $this->catToTemple($item, $this->templatePath);
        }
        return $str;
    }


    /////////////////////////////////////////////
    //ROOT.'app/view/widgets/menu.php'
    public function catToTemple($item, $path){
        ob_start();
        require("$path");
        return ob_get_clean();
    }

}

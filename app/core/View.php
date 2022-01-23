<?php


namespace app\core;


class View
{
    /**
     * current route
     * @var array
     */
    public array $route = [];

    /**
     * current view
     * @var
     */
    public $view;

    /**
     * current template
     * @var
     */
    public $layout;

    /**
     * View constructor.
     * @param $route
     */
    public function __construct($route,$view='',$layout=''){
        $this->route = $route;
        if($layout===false){
            $this->layout = false;
        }else{
            $this->layout = $layout ? : LAYOUT;
        }
        $this->view = $view;
    }

    public function render($vars){
        if(is_array($vars)) {
            extract($vars);
        }
        $fileView = ROOT.'app/view/'.$this->route['prefix'].$this->route['controller'].'/'.$this->view.'.php';      //тут баг, надо поправить!
        //if($this->route['prefix']=='admin')
        ///////////////////////////////////////////////
        ob_start('ob_gzhandler');
        header("Content-Encoding: gzip");
        if(file_exists($fileView)){
            require($fileView);
        }else{
            throw new \Exception("View $fileView - not found", 404);
        }
        $content = ob_get_contents();
        ob_clean();
        ///////////////////////////////////////////////
        if($this->layout!==false){
            if($this->route['prefix'] == 'admin\\'){
                $fileLayout = ROOT.'app/view/admin/layouts/'.$this->layout.'.php';
            }else{
                $fileLayout = ROOT.'app/view/layouts/'.$this->layout.'.php';
            }
            if(file_exists($fileLayout)){
                require($fileLayout);
            }else{
                throw new \Exception("View $fileLayout - not found", 404);
            }
        }
    }

    /*
    protected function compressPage($buffer){
        $search = [
            "/(\n)+/",
            "/\r\n+/",
            "/\n(\t)+/",
            "/\n(\ )+/",
            "/\>(\n)+</",
            "/\>\r\n</",
        ];
        $replace = [
            "\n",
            "\n",
            "\n",
            "\n",
            "><",
            "><",
        ];

        return preg_replace($search, $replace, $buffer);
    }
    */
}
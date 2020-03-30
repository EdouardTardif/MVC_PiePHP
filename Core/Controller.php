<?php

Class Controller {

    // public $yes = 'yes';
    public static $_render;
    public function __construct(){
        self::render('index',['test','test2']);
        var_dump(self::$_render);
    }

    protected function render($view,$scope = []) {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR,[dirname(__DIR__), 'src', 'View', str_replace('Controller','', basename(get_class($this))),$view]).'.php';
        if(file_exists($f)) {
            ob_start();
            include ($f) ;
            $view = ob_get_clean();
            echo $view;
            ob_start();
            include (implode(DIRECTORY_SEPARATOR,[dirname(__DIR__),'src','View','index']).'.php');
            self::$_render = ob_get_clean();
        }
    }
        
}
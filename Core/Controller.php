<?php

// use Core\Database;
namespace Core;
Class Controller {

    // public $yes = 'yes';
    public $db;
    protected static $_render;
    public function __construct(){
        
    }

    protected function render($view, $scope = [])
    {
      extract($scope);
      $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__) , 'src', 'View', str_replace('Controller', '', basename(get_class($this))) , $view]) . '.php';
      // echo $f;
      if (file_exists($f))
      {
        ob_start();
        include ($f);
        
        $view = ob_get_clean();
        // $view = $this->templateEngine($view);
        // var_dump($view);
        ob_start();
        include (implode(DIRECTORY_SEPARATOR, [dirname(__DIR__) , 'src', 'View', 'index']) . '.php');
        self::$_render = ob_get_clean();
      }
    }

    public function __destruct(){
        echo self::$_render;
    }
    

    public function templateEngine($view){
      $regex = '/{{\$\w+}}/';
      // preg_match($regex,$view,$matches);
      // $mot = strrev(substr(strrev(substr($match,2)),2));
      preg_replace($regex,'<?= htmlentities ($oui) ?>',$view);
      // echo $match.PHP_EOL;
      return $view;
    }
}
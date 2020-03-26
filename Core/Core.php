<?php 

namespace Core ;

class Core
{
    public function run ()
    {

        $array = explode('/',$_SERVER['REDIRECT_URL']);
        $arraystatic = $array;

        $controller = $array[2] . 'Controller';
        $method = $array[3] . 'Action';
        // echo __CLASS__ . " [ OK ]" . PHP_EOL ;
        
        array_shift($arraystatic);
        
        if(null != $route = Router::get() ){

        }
        
        $class = new $controller();
        $class->$method();
    }
}
?>
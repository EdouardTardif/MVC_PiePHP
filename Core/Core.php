<?php 


namespace Core ;
use Router;

class Core
{
    public function __construct(){
        require_once('./src/routes.php');
    }


    public function run ()
    {

        $array = explode('/',$_SERVER['REDIRECT_URL']);
        $arraystatic = $array;
        array_shift($arraystatic);
        array_shift($arraystatic);
        $url = '/'. implode("/",$arraystatic);
        // echo $url.PHP_EOL;
        $route = Router::get($url);
        if($route != null){
            echo "Find a route !! for $url".PHP_EOL;
            $controller = $route['controller'];
            $action = $route['action'];
            echo "Controller is $controller".PHP_EOL;
            echo "Action is $action".PHP_EOL;

        } else {
            $controller = ucfirst($array[2]) . 'Controller';
            if(class_exists($controller)){
                $class = new $controller();
                if(!empty($array[3]) && method_exists($class,$array[3] . 'Action')){
                    $method = $array[3] . 'Action';
                    $class->$method();
                } else {
                    $class->indexAction();
                }
            } else {
                echo '404'.PHP_EOL;
            }
        }
        
    }
}
?>
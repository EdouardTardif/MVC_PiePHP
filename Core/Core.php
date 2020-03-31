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
            // echo "Find a route !! for $url".PHP_EOL;
            $controller = ucfirst($route['controller']) . 'Controller';
            $action = $route['action'].'Action';
            $class = new $controller();
            $class->$action();
            // echo "Controller is $controller".PHP_EOL;
            // echo "Action is $action".PHP_EOL;

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
                if (headers_sent()) {
                    echo 'yes';
                    die("Error: headers already sent!");
                }
                else {
                    echo 'no';
                    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
                    exit();
                }
                // header("Location: MyBooks.php", true);
                // exit();
                // echo '404'.PHP_EOL;
            }
        }
        
    }
}
?>
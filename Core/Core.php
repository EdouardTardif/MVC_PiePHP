<?php 


namespace Core ;
use Router;
class Core
{
    public function run ()
    {

        $array = explode('/',$_SERVER['REDIRECT_URL']);
        $arraystatic = $array;
        array_shift($arraystatic);

        $controller = $array[2] . 'Controller';
        if(class_exists($controller)){
            // echo "oui";
            $class = new $controller();
            if(!empty($array[3])){
                $method = $array[3] . 'Action';
                if(method_exists($class,$method)){
                    $class->$method();
                } else {
                    $class->indexAction();
                }
            } else {
                $class->indexAction();
            }
        } else {
            echo '404';
        }
    }
}
?>
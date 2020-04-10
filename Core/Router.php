<?php


class Router {

    private static $routes;

    public static function connect($url,$route){
        // echo "Connecting $url".PHP_EOL;
        // print_r($route);
        self::$routes[$url] = $route;
    }


    public static function get($url){
        
        foreach(self::$routes as $key => $route){
            $url2 = ltrim($url,'/');
            $key2 = ltrim($key,'/');
            $regmatch = '/{\w+}/';
            $path = preg_replace($regmatch,'([\w-]+)',$key2);
            $regex = '#^'.$path.'$#';
            if(preg_match($regex, $url2, $matches)){
                array_shift($matches);
                $class = self::$routes[$key]['controller']."Controller";
                $method = self::$routes[$key]['action']."Action";
                $user = new $class();
                $user->$method(...$matches);
                return true;
            }
        }


        $res = array_key_exists($url, self::$routes) ? self::$routes[$url] : null;
        return $res;
    }
}
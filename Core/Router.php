<?php


class Router {

    private static $routes;

    public static function connect($url,$route){
        // echo "Connecting $url".PHP_EOL;
        // print_r($route);
        self::$routes[$url] = $route;
    }


    public static function get($url){

        $res = array_key_exists($url, self::$routes) ? self::$routes[$url] : null;
        return $res;
    }
}
<?php

namespace Core;
class Request {
    public static function secure(){
        foreach($_POST as $keys => $POST){
            $POST = htmlspecialchars($POST);
            $POST = trim($POST);
            $POST = stripslashes($POST);
            $_POST[$keys] = $POST;
        }
        
        foreach($_GET as $keys => $GET){
            $GET = htmlspecialchars($GET);
            $GET = trim($GET);
            $GET = stripslashes($GET);
            $_GET[$keys] = $GET;
       }


   }
}
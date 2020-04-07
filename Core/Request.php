<?php

namespace Core;
class Request {
    public static function secure(){
        foreach($_REQUEST as $keys => $POST){
            $POST = stripslashes(trim(htmlspecialchars($POST)));
            $_REQUEST[$keys] = $POST;
        }
   }
}
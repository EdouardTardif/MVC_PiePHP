<?php

namespace Core;
class Request {
    public static function getQueryParams(){
        $newrequest = [];
        foreach($_REQUEST as $keys => $POST){
            $POST = stripslashes(trim(htmlspecialchars($POST)));
            $newrequest[$keys] = $POST;
        }
        return $newrequest;
   }
}
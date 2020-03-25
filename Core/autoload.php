<?php 



spl_autoload_register(function($class){
    // require "Core.php";
    $class = str_replace('\\',"/",$class);
    // echo $class;
    require $class.'.php';

});


?>
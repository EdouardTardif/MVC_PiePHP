<?php 



spl_autoload_register(function($class){
    $class = str_replace('\\',"/",$class).'.php';
    if(file_exists($class)){
        require $class;
    } elseif(file_exists('./src/Controller/'.$class)){
        require './src/Controller/'.$class;
    } elseif(file_exists('./src/Model/'.$class)){
        require './src/Model/'.$class;
    }
});


?>
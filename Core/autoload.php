<?php 



spl_autoload_register(function($class){
    $class = str_replace('\\',"/",$class).'.php';
    if(file_exists($class)){
        // echo 'autoloaded-->'.$class.PHP_EOL;
        require $class;
    } elseif(file_exists('./Core/'.$class)){
        // echo 'autoloaded-->'.'./Core/'.$class.PHP_EOL;
        require './Core/'.$class;
    } elseif(file_exists('./src/Controller/'.$class)){
        // echo 'autoloaded-->'.'./src/Controller/'.$class.PHP_EOL;
        require './src/Controller/'.$class;
    } elseif(file_exists('./src/Model/'.$class)){
        // echo 'autoloaded-->'.'./src/Model/'.$class.PHP_EOL;
        require './src/Model/'.$class;
    } elseif(file_exists('./src/'.$class)){
        // echo 'autoloaded-->'.'./src/'.$class.PHP_EOL;
        require './src/'.$class;
    } else {
        echo 'failed autoload-->'.$class.PHP_EOL;
    }
});


?>
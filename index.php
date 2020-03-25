<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <pre><?php var_dump($_POST)?></pre>
        <pre><?php var_dump($_GET)?></pre>
        <pre><?php var_dump($_SERVER)?></pre>
        
        <pre><?php 
            define('BASE_URI', str_replace('\\', '/',substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
            // echo BASE_URI;
            require_once (implode(DIRECTORY_SEPARATOR, ['Core','autoload.php']));
            $app = new Core\Core();
            $app->run(); ?>
        </pre>
        <script src="" async defer></script>
    </body>
</html>
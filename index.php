<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="/webroot/css/reset.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php
            define('BASE_URI', str_replace('\\', '/',substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
            require_once (implode(DIRECTORY_SEPARATOR, ['Core','autoload.php']));
            session_start();
            $app = new Core\Core();
            $app->run(); ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./webroot/css/reset.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost/MVC_PiePHP/film/all">Tout les films</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="http://localhost/MVC_PiePHP/genre/all">tout les genres</a></li>
            
            <li><a href="http://localhost/MVC_PiePHP/user/profile">Profile</a></li>
            <li><a href="http://localhost/MVC_PiePHP/film/add">Ajouter un film</a></li>
            <li><a href="http://localhost/MVC_PiePHP/genre/add">Ajouter un genre</a></li>
            <li><a href="http://localhost/MVC_PiePHP/logout">Se deconnecter</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?= $view ?>
    </div>
</body>
</html>
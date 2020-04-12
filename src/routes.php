<?php

Router::connect('/',['controller' => 'app','action' => 'index']);
Router::connect('/register',['controller' => 'user','action' => 'add']);
Router::connect('/login',['controller' => 'user','action' => 'login']);
Router::connect('/user/test/{id}',['controller' => 'user','action' => 'show']);
Router::connect('/logout',['controller' => 'user','action' => 'logout']);
Router::connect('/update',['controller' => 'user','action' => 'update']);



Router::connect('/film/info/{id}',['controller' => 'film','action' => 'info']);
Router::connect('/film/update/{id}',['controller' => 'film','action' => 'update']);
Router::connect('/film/delete/{id}',['controller' => 'film','action' => 'delete']);




Router::connect('/genre/info/{id}',['controller' => 'genre','action' => 'info']);
Router::connect('/genre/update/{id}',['controller' => 'genre','action' => 'update']);
Router::connect('/genre/delete/{id}',['controller' => 'genre','action' => 'delete']);



// Router::connect('/user',['controller' => 'user','action' => 'filter']);

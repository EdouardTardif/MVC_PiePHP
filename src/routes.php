<?php

Router::connect('/',['controller' => 'app','action' => 'index']);
Router::connect('/register',['controller' => 'user','action' => 'add']);
// Router::connect('/user',['controller' => 'user','action' => 'filter']);

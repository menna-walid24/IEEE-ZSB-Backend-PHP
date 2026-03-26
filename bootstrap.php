<?php
use core\App;
use core\container;
use core\Database;
$container=new container();
$container->bind('core\Database',function(){
$config = require base_path('config.php');
return new Database($config['database']);
});
$container->resolve('core\Database');
$db=$container->resolve('core\Database');
App::setContainer($container);

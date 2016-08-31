<?php

session_start();

require 'controllers/BaseController.php';
require 'models/BaseModel.php';


$action= isset($_GET['action']) ? strtolower ($_GET['action']) . 'Controller' : 'HomeController';
$action=ucwords($action); 
$method=isset($_GET['method']) ? $_GET['method'] : 'index';

$action_file='controllers/'.$action.'.php';


if (file_exists($action_file)) {
    //exit('ok');
    require_once $action_file;
    
    $controller=new $action();
    
    $controller->$method();
} else {
    throw new Exception('Controller not found');
}
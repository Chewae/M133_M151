<?php

session_start();

include_once './ressources/builder.php';

$temp = trim($_SERVER['REQUEST_URI'], '/');
$url = explode('/', $temp);

$dirDepth = 2;

if(!empty($url[$dirDepth])){
    $file = strtolower($url[$dirDepth]);
    switch($file){
        case 'checkuser':
            build('checkUser.php');
            break;
            
        case 'createentry':
            build('createEntry.php');
            break;
            
        case 'displayblog':
            build('displayBlog.php');
            break;

        case 'login':
            build('login.php');
            break;
            
        case 'logout':
            build('logout.php');
            break;

        case 'register':
            build('register.php');
            break;

        case 'registeruser':
            build('registerUser.php');
            break;
            
        case 'users.txt':
            build('home.php');
            break;
            
        default:
            build('home.php');
            break;
    }
} else{
    build('home.php');
}

<?php
require_once 'header.php';


class Dispatcher {
    
    function buildAll(){
        $this->buildHead();
        $this->buildBody();
    }
    
    function buildHead(){
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Blog</title>
                <script src="view/js/jquery-3.3.1.min.js"></script>
                <link href="view/css/layout.css" rel="stylesheet" type="text/css">
                <script src="view/js/validation.js"></script>
            </head>
            ';
    }
    
    function buildBody(){
        echo '
            <body class="font">
        ';
                new Header();
        echo '
            <section>
        ';
                $this->getRequestedPage();
        echo '
            </section>
            <footer>
                <h6>&copy 2018 Kevin Looser<br/><br/>Module 133</h6>
            </footer>
            </body>
            </html>
        ';
    }
    
    function getRequestedPage(){
        $temp = trim($_SERVER['REQUEST_URI'], '/');
        $url = explode('/', $temp);
        
        $dirDepth = 2;
        
        if(!empty($url[$dirDepth])){
            $file = strtolower($url[$dirDepth]);
            switch($file){
                case 'checkuser':
                    require_once 'checkUser.php';
                    new CheckUser();
                    break;
                    
                case 'createentry':
                    require_once 'createEntry.php';
                    new CreateEntry();
                    break;
                    
                case 'displayblog':
                    require_once 'displayBlog.php';
                    new DisplayBlog();
                    break;
                    
                case 'login':
                    require_once 'login.php';
                    new Login();
                    break;
                    
                case 'logout':
                    require_once 'logout.php';
                    new Logout();
                    break;
                    
                case 'register':
                    require_once 'register.php';
                    new Register();
                    break;
                    
                case 'registeruser':
                    require_once 'registerUser.php';
                    new RegisterUser();
                    break;
                    
                case 'users.txt':
                    require_once 'home.php';
                    new Home();
                    break;
                    
                default:
                    require_once 'home.php';
                    new Home();
                    break;
            }
        } else{
            require_once 'home.php';
            new Home();
        }
    }
}
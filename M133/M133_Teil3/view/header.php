<?php
class Header{
    
    function __construct(){
        $this->build();
    }
    
    function build(){
        echo '
            <header class="header" id="headNav">
                <h1>Blog</h1>
        ';
        if(isset($_SESSION['username'])){
            $name = $_SESSION['username'];
            echo '<p class="headUser">' . $name . '<p/>';
        }
        echo '
            <nav id="navbar">
                <ul>
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>
                        <a href="displayBlog">Blog</a>
                    </li>
        ';
        if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
            echo '
                <li>
                	<a href="createEntry">Create Entry</a>
                </li>
                <li>
                    <a href="logout">Logout</a>
                </li>
            ';
        } else {
            echo '
                <li>
                    <a href="login">Login</a>
                </li>
            ';
        }
        echo '
                    </ul>
                </nav>
            </header>
        ';
    }
}
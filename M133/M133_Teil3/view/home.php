<?php

class Home{
    function __construct(){
        if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
            echo '
                <div class="element">
                    <h1>Welcome to my blog</h1>
                    <p>
                        You can check out blog entries of other members. To create entries yourself,
                        you need to be logged in. You can register yourself <a class="link" href="register">here</a>.
                    </p>
                </div>
            ';
        } else {
            echo '
                <div class="element">
                    <h1>Welcome to my blog</h1>
                    <p>
                        You can check out blog entries of other members. To create entries yourself, click <a class="link" href="createEntry">here</a>.
                    </p>
                </div>
            ';
        }
    }
}

?>

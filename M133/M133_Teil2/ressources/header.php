<header class="header" id="headNav">
    <h1>Blog</h1>
    <?php     
    if(isset($_SESSION['username'])){
        $name = $_SESSION['username'];
        echo '<p class="headUser">' . $name . '<p/>';
    }
    ?>
    <nav id="navbar">
        <ul>
            <li>
                <a href="home">Home</a>
            </li>
            <li>
                <a href="displayBlog">Blog</a>
            </li>
            <?php
            if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {

                ?>
                <li>
                	<a href="createEntry">Create Entry</a>
                </li>
                <li>
                    <a href="logout">Logout</a>
                </li>
                <?php
            } else{
                ?>
                <li>
                    <a href="login">Login</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </nav>
</header>
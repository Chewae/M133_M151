<?php
if(!isset($_SESSION['username']) && empty($_SESSION['username'])){
    echo '
        <div class="element" id="signinBlock">
            <h2>Sign In</h2>
            <form id="formSignIn" action="checkUser" method="post">
            <div class="formrow">
                <label for="username01" class="label">Username</label>
                <input id="username01" name="logonName" type=email placeholder="Email-Address" required pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" onkeyup="checkSignIn()">
                <br/>
            </div>
            <div class="formrow">
                <label for="password01" class="label">Password</label>
                <input id="password01" name="logonPassword" type=password placeholder="Password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&:._])[A-Za-z\d@$!%*?&:._]{8,16}$" onkeyup="checkSignIn()">
                <br/>
            </div>
    ';
    if(isset($_SESSION['loginERR']) && !empty($_SESSION['loginERR'])){
        echo $_SESSION['loginERR'];    
        unset($_SESSION['loginERR']);
    }
    echo '
                <button id="button01" type=submit>Sign In</button>
            </form>
            <a class="link" href="register">I would like to register a new account</a>
            <script type="text/javascript">
                disableButton("button01");
            </script>
        </div>
    ';
} else {
    header('Location: home');
}

?>
<?php
include './ressources/validation.php';

class CheckUser {
    
    function __construct(){
        if(validateName('logonName') && validatePassword('logonPassword')){
            $this->checkUser();
        } else if(validateName('logonName') == false){
            $_SESSION['loginERR'] = $email;
        } else if(validatePassword('logonPassword') == false){
            $_SESSION['loginERR'] = $password;
        }
        
        $this->checkUser();
    }
    
    function checkUser() {
        $filename = 'files/users.txt';
        $userFile = fopen($filename, "r") or die('Unable to Access User Information');
        
        while(($line = fgets($userFile)) !== false){
            if(explode(';', $line)[0] == $_POST['logonName']){
                if(explode(';', $line)[2] == hash("sha256", $_POST['logonPassword'].$_POST['logonName']))
                    session_regenerate_id();
                    $_SESSION['username'] = $_POST['logonName'];
                    header('Location: home');
            } else {
                $_SESSION['loginERR'] = '<p class="error">Email or password were wrong. Try again.</p>';
                header('Location: login');
            }
        }
        fclose($userFile);
    }
}
?>
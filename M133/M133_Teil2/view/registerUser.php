<?php
function registerUser(){
    $filename = 'files/users.txt';
    $taken = false;
    $userFile = fopen($filename, "a+") or die('Unable to Access User Information');

    while(($line = fgets($userFile)) !== false){
        if(explode(';', $line)[0] == $_POST['registerName']){
            $taken = true;
        }
    }

    $registerString = $_POST['registerName'] . ';user;' . hash("sha256", $_POST['registerPassword'] . $_POST['registerName']) . ';' . $_POST['registerLanguage'] . ';' . "\n";

    if(!$taken){
        echo 'about to write';
        fwrite($userFile, $registerString);
        header('Location: login');
    } else {
        $_SESSION['registerERR'] = '<p class="error">Email is already in use! Try another email address.</p>';
        header('Location: register');
    }
    fclose($userFile);
}

//validate server-side
include './ressources/validation.php';

if(validateName('registerName') && validatePassword('registerPassword')){
    checkUser();
} else if(validateName('registerName') == false){
    $_SESSION['registerERR'] = $email;
} else if(validatePassword('registerPassword') == false){
    $_SESSION['registerERR'] = $password;
}

registerUser();
?>
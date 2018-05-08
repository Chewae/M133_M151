<?php

$email;

$password;

function validateName($logonName){
    if(isset($_POST[$logonName]) and !empty($_POST[$logonName])) {
        $name = $_POST[$logonName];
        if(!preg_match('/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/', $name)){
            $email = '<p>The given email does not match the requirements.<p/><br/>';
            return false;
        }
    }
    else{
        $email = '<p>No name was set.<p/><br/>';
        return false;
    }
    return true;
}

function validatePassword($logonPassword){
    if(isset($_POST[$logonPassword]) and !empty($_POST[$logonPassword])) {
        $password = $_POST[$logonPassword];
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&:._])[A-Za-z\d@$!%*?&:._]{8,16}$/', $password)){
            $password = '<p>The given password does not match the requirements.<p/><br/>';
            return false;
        }
    }
    else{
        $password = '<p>No password was set.<p/><br/>';
        return false;
    }
    return true;
}

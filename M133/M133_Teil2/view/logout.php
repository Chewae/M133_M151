<?php
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
    header('Location: login');
}
session_unset();
session_destroy();
session_start();
session_regenerate_id();
header('Location: home');
<?php
require '../partials/header.php';


if(!isset($_SESSION['user-id'])){
    header('location: ' . "http://localhost/blog/" . 'login.php');
    die();
}

?>
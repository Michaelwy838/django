<?php
require 'config/constants.php';

session_destroy();
header('location: ' . "http://localhost/blog/");
die(); 


?>
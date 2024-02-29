<?php
require 'config/database.php';

if (isset($_POST['submit'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!$username) {
        $_SESSION['signin'] = 'Username is required';

    }
    elseif (!$password) {
        $_SESSION['signin'] = 'password required';
    }
    else {
        $fetch_user_query = "SELECT * FROM users WHERE username='$username'";
        $fetch_user_result = mysqli_query($connection, $fetch_user_query);

        if (mysqli_num_rows($fetch_user_result) == 1) {
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            if (password_verify($password, $db_password)) {
                $_SESSION['user-id'] = $user_record['id'];
                if ($user_record['is_admin'] == 1) {
                    $_SESSION['user_is_admin'] = true;
                }
                header('location: ' . "http://localhost/blog/" . 'admin/');
            }
            else{
                $_SESSION['signin'] = 'please check password';
            }
        }
        else{
            $_SESSION['signin'] = "user not found";
        }
    }
    if (isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . "http://localhost/blog/" . 'login.php');
        die();
    }
}
else{
    header('location: ' . "http://localhost/blog/" . 'login.php');
    die();
}
?>
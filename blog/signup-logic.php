<?php
require 'config/database.php';



if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$firstname){
        $_SESSION['signup'] = 'enter firstname';
    }
    elseif(!$lastname){
        $_SESSION['signup'] = 'enter lastname';
    }
    elseif(!$email){
        $_SESSION['signup'] = 'enter email';
    }
    elseif(!$lastname){
        $_SESSION['signup'] = 'enter lastname';
    }
    elseif(strlen($createpassword) < 8 || strlen($confirmpassword) < 8){
        $_SESSION['signup'] = 'password is to weak';
    }
    elseif(!$avatar['name']){
        $_SESSION['signup'] = 'add profile picture';
    }
    elseif(!$username){
        $_SESSION['signup'] = 'enter username';
    }
    else{
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] = 'incorrect password';
        }
        else{
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);
            
            $user_check_query = "SELECT * FROM users WHERE username= '$username' OR email= '$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){
                $_SESSION['signup'] = 'username/email already taken';

            }
            else{
                $time = time();
                $avatar_name = $time . $avatar['name'];
                $avatar_tmp_name = $avatar['tmp_name'];
                $avatar_destination_path = 'images/' .$avatar_name;

                $allowed_files = ['png', 'jpg', 'jpeg'];
                $extention = explode('.', $avatar_name);
                $extention = end($extention);
                if(in_array($extention, $allowed_files)){
                    if($avatar['size'] < 1000000){
                        move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                    }
                    else{
                        $_SESSION['signup'] = "file is too big";
                    }
                }
                else{
                    $_SESSION['signup'] = 'file format incorrect';
                }
            }
        }
    }
    if (isset($_SESSION['signup'])) {
        $_SESSION['signup-data'] = $_POST;
        header('location: ' . "http://localhost/blog/" . 'signup.php');
        die(); 
    }
    else{
        $insert_user_query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', email='$email', password='$hashed_password', avatar='$avatar_name', is_admin=0, username='$username'";
        $insert_user_result = mysqli_query($connection, $insert_user_query);
        if(!mysqli_errno($connection)){
            $_SESSION['signup-success'] = "Registration successfull, log in";
            header('location: ' . "http://localhost/blog/" . 'login.php');
            die();
        }
    }
}

else{
    header('location: ' . "http://localhost/blog/" . 'signup.php');
    die();
}
?>
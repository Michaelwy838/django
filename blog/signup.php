<?php
require 'config/constants.php';


$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;

unset($_SESSION['signup-data']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scoop news</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/77a10864d0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
<section class="form__section">
    <div class="container form__section-container">
        <h2 style="text-align: center; text-align: center; border-bottom: 1px solid gray; padding-bottom: 5px; margin-bottom: 10px;">Sign Up with Scoop news</h2>
        <?php if(isset($_SESSION['signup'])): ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['signup'];
                    unset($_SESSION['signup']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <form action="<?= "http://localhost/blog/" ?>signup-logic.php" enctype="multipart/form-data" method="POST" >
            <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name">
            <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Last Name">
            <input type="email" name="email" value="<?= $email ?>" placeholder="mikiewikie09@gmail.com">
            <input type="password" name="createpassword"value="<?= $createpassword ?>" placeholder="Create Password">
            <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Confirm Password">
            <div class="form__control">
                <label for="avatar">Profile Picture</label>
                <input type="file" name="avatar" id="avatar">
            </div>
            <input type="text" name="username" value="<?= $username ?>" placeholder="Username">
            <button type="submit" name="submit" class="btn" >Sign Up</button>
            <small>Already Have an Account ? <a href="login.php">Log In</a></small>
        </form>
    </div>
</section>    
</body>
</html> 
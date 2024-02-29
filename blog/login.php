<?php
require 'config/database.php';
$username = $_SESSION['signin-data']['username'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;
unset($_SESSION['signin-data']);



?>
<?php
if (isset($_POST['login'])) {
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
                header('location: admin/adduser.php');
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
        <h2 style="text-align: center; border-bottom: 1px solid gray; padding-bottom: 5px; margin-bottom: 10px;">Log In with Scoop news</h2>
        <?php if(isset($_SESSION['signup-success'])) : ?>
            <div class="alert__message success">
                <p>
                    <?= $_SESSION['signup-success'];
                    unset($_SESSION['signup-success']);
                    ?>
                </p>
            </div>
            <?php elseif(isset($_SESSION['signin'])) : ?>
            <div class="alert__message error">
                <p>
                    <?= $_SESSION['signin'];
                    unset($_SESSION['signin']);
                    ?>
                </p>
            </div>
        <?php endif ?>

        <form action="<?="http://localhost/blog/"?>signin-logic.php" method="POST">
            <input type="text" name="username" value="<?=$username?>" placeholder="Enter Username">
            <input type="password" name="password" value="<?=$password?>" placeholder="Enter Password">
            <button type="submit" name="submit" class="btn">Log In</button>
            <small>Don't Have an Account ? <a href="signup.php">Sign up</a></small>
        </form>
    </div>
</section>
</body>
</html>     
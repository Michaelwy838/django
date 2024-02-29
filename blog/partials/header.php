<?
require '/config/database.php';


if(!isset($_SESSION['user-id'])){
    header('location: ' . "http://localhost/blog/" . 'login.php');
    die();
}

if(isset($_SESSION['user-id'])){
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id= $id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scoop news</title>
    <link rel="stylesheet" href="http://localhost/blog/css/styles.css">
    <script src="https://kit.fontawesome.com/77a10864d0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= "http://localhost/blog/"?>" class="nav__logo">SCOOPNEWS</a>
            <ul class="nav__items">
                <li><a href="<?= "http://localhost/blog/"?>blog.php">Blog</a></li>
                <li><a href="<?= "http://localhost/blog/"?>services.php">Daily Updates</a></li>
                <li><a href="<?= "http://localhost/blog/"?>about.php">About Us</a></li>
                
                <?php if (isset($_SESSION['user-id'])): ?>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="<?= "http://localhost/blog/" . 'images/' . $avatar['avatar'] ?>">
                        </div>
                        <ul>
                            <li><a href="<?= "http://localhost/blog/"?>admin/index.php">Dashbord</a></li>
                            <li><a href="<?= "http://localhost/blog/"?>logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="<?= "http://localhost/blog/"?>login.php">Sign in</a></li>
                <?php endif ?>
            </ul> 
            <button id="open__nav-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <button id="close__nav-btn"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
    </nav> 
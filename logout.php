<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Opendag Mbo Utrecht</title>
</head>

<body class="home">


    <header>
        <a href="index.php" class="logo">MboUtrecht</a>

     <nav>
         <ul>
             <li><a href="index.php">home</a></li>
             <li><a href="course.html">courses</a></li>
             <li><a href="">informatie</a>
         <ul>
             <li><a href="about.php">about</a></li>
             <li><a href="contact.php">contact</a></li>
        </ul>
             <li><a href="">registreren?</a>
         <ul>
             <li><a href="register.php">registreer</a></li>
             <li><a href="login.php">Login</a></li>
        </ul>
    </ul>
     </nav>
 </header>
 </html>

<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>
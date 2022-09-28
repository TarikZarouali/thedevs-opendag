<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
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

</body>
</html>



<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="welkom">
        <h1 class="my-5">Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom bij onze website.</h1>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Reset je wachtwoord.</a>
            <a href="logout.php" class="btn btn-danger ml-3">Log uit van uw account.</a>
        </p>
    </div>
</body>
</html>
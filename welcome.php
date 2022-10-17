<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <title>Opendag Mbo Utrecht</title>
</head>

<body class="home">


    <header>
        <a href="index.php" class="logo">MboUtrecht</a>

        <nav>
            <ul>
                <li><a class="active" href="index.php">home</a></li>
                <li><a href="course.html">courses</a></li>

                <li><a href="">informatie</a>
                    <ul>
                        <li><a href="about.php">about</a></li>
                        <li><a href="contact.php">contact</a></li>
                        <li><a href="referantie.php">referantie</a></li>


                    </ul>
                <li><a href="">Plattegrond</a>
                    <ul>
                        <li><a href="./verdieping3.html" class="btn purple">Verdieping 3</a></li>
                        <li><a href="./verdieping4.html" class="btn purple">Verdieping 4</a></li>


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
            <a href="adminpage.php" class="btn btn-success ml-3">Admin dashboard.</a>
        </p>
    </div>
</body>
</html>
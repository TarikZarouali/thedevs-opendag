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
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "db/config_db.php";
 
$sql = "SELECT id, username, created_at FROM register";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Id</th><th>Naam</th><th>Geregistreerd op</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["username"]." ".$row["created_at"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$mysqli->close();
?>
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
 
try {
    $query = "SELECT id, username, created_at FROM users";
    $result = $pdo->query($query);
     ?>
     <table border="1" cellpadding="10" cellspacing="0">
     <?php
     $sn=1;
     while($data = $result->fetch(PDO::FETCH_ASSOC)) {
       
       ?>
        <tr>
       <td><?php echo $sn; ?> </td>
       <td><?php echo $data['id']; ?> </td>
       <td><?php echo $data['username']; ?> </td>
       <td><?php echo $data['created_at']; ?> </td>
        </tr>
        <?php
      }
      ?>
    </table>
      <?php
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

?>
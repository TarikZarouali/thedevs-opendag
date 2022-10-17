<?php


$servername = "localhost";
$username = "root";
$password = "";
$databasename = "proprak-login";

$conn = mysqli_connect($servername, $username, $password, $databasename);

$sql = "INSERT INTO `users` (`id`, `firstname`, `insertion`, `lastname`, `opinion` ,`opinion2`) VALUES (NULL, '{$_POST["firstname"]}', '{$_POST["insertion"]}', '{$_POST["lastname"]}', '{$_POST["opinion"]}', '{$_POST["opinion2"]}');";

mysqli_query($conn, $sql);

header("Refresh:1; url=./referantie.php");

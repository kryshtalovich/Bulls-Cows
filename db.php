<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bullscow";
$mysqli = new mysqli($servername, $username, $password, $dbname);
 if ($mysqli_connect_error){
     die ("Connection failed" . $mysqli_connect_error);
 }
?>
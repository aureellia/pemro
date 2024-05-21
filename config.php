<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artikel";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect){
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM tabelartikel";
$result = $connect -> query($query);
?>
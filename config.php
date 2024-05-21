<?php
// Replace with your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artikel";

//1st func
function JudulId($conn, $id) {
  $sql = "SELECT judul FROM tabelartikel WHERE id=" . $id;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    return $row["judul"];
  } else {
    return "0 results";
  }
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$judul1 = JudulId($conn, 1);
$judul2 = JudulId($conn, 2);
$judul3 = JudulId($conn, 3);


//2nd func
function DeskripsiId($conn, $id) {
    $sql = "SELECT deskripsi FROM tabelartikel WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["deskripsi"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $desk1 = DeskripsiId($conn, 1);
  $desk2 = DeskripsiId($conn, 2);
  $desk3 = DeskripsiId($conn, 3);

//3rd func
function LinkId($conn, $id) {
    $sql = "SELECT link FROM tabelartikel WHERE id=" . $id;
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      return $row["link"];
    } else {
      return "0 results";
    }
  }
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  // Call functions with different IDs
  $link1 = LinkId($conn, 1);
  $link2 = LinkId($conn, 2);
  $link3 = LinkId($conn, 3);

$conn->close();
?>
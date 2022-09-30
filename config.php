<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = 'ajax';

$conn = mysqli_connect($localhost, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>
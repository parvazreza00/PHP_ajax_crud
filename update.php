<?php
include('config.php');

$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];
$userid = $_GET['userid'];

$sql = "UPDATE users SET name='$name', email='$email', password='$password' WHERE id='$userid'";
$query = mysqli_query($conn, $sql);
if($query){
    echo "Update successfyll";
}else{
    echo "Not updated";
}
?>
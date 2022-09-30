<?php
include('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
$query = mysqli_query($conn, $sql);

if($query){
    echo "Data inserted successffully";
}else{
    echo "Inserted failed";
}

?>


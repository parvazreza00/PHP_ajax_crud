<?php
include("config.php");

$id = $_GET['userid'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<div class="container">    
    
    <h2 class="text-center text-success text-decoration-underline">Edit Page</h2>
    
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name..." value="<?php echo $name;?>"><br>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email..." value="<?php echo $email;?>"><br>
    <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password..." value="<?php echo $password;?>"><br>
    <button class="btn btn-primary" id="button" onclick=Update(<?php echo $row['id']; ?>)>Update Data</button>
    <button class="btn btn-primary" id="button" onclick="home()">Home</button>

</div>
</body>
</html>
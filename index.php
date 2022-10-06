<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">    
    
<h2 class="text-center text-success text-decoration-underline">PHP AJAX CRUD</h2>

<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name..."><br>
<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email..."><br>
<input type="text" class="form-control" id="password" name="password" placeholder="Enter your password..."><br>
<button class="btn btn-primary" id="button">Insert Data</button>
<button class="btn btn-success text-align-right " id="button1">Read Data</button>
<h2 class="text-center">Reading Data from database</h2>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Edit</th>
    </thead>
    <tbody id="tbody">

    </tbody>
</table>




</div>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="ajax.js"></script>
</body>
</html>
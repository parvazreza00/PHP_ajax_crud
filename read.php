<?php
include('config.php');

$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);

while($row= mysqli_fetch_array($query)){ ?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><button onclick=Delete(<?php echo $row['id']; ?>)>Delete</button></td>
    </tr>


<?php

}
?>
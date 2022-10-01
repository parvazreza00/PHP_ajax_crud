<?php
include('config.php');

if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $delete = "DELETE FROM `users` WHERE id=$userid";
    $query = mysqli_query($conn, $delete);
    if($query){
        echo "DELETE CONFIRM";
    }else{
        echo "NOT DELETE";
    }

}
?>
//insert secion start here....
$("#button").click(function(){

    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    
    $.ajax({
        method:"POST",
        url:"insert.php",
        data:{name:name, email:email, password:password},
        success:function(data){
           read();
        }
    });
});
//insert secion end here....

//reading data secion here....
function read(){
    var read = "";

    $.ajax({
        method: "POST",
        url:'read.php',
        data:{read:read},
        success:function(data){
            $("#tbody").html(data);
        }
    });
}

//reading secion end here....

//delete secion start here....
function Delete(userid){
    $con = confirm("Are you sure to delete?");
    if($con == true){
        $.ajax({
            url:"delete.php",
            method:"POST",
            data:{userid:userid},
            success:function(){
                read();
            }
        });
    }
   
}
//delete secion end here....

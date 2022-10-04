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
//Edit secion start here....

function Edit(userid){
    

    $.ajax({
        mehtod:"GET",
        url:"edit.php",
        data:{userid:userid},
        success:function(data){
            $("body").html(data);
        }
    });

}
//edit section end ......
//update sercito start.....

function Update(userid){
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        url:"update.php",
        mehtod:"GET",
        data:{name:name, email:email, password:password, userid:userid},
        success:function(data){
            alert(data);
        }
    });
}
//update section end......

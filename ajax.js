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
            $("#tbody").html
        }
    });
}


//reading secion end here....

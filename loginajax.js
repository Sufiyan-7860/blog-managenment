$(document).ready(function(){
    $('#loginform').submit(function(){
        $.ajax({
            type: "post",
            data:{
                url: "../controller/loginn.php",
                email: $("#email").val(),
                password: $("pass").val()
            },
            success: function(data){
            }                
        });
    });
}); 
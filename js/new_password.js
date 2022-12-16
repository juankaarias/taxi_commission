$(document).ready(function() {
    frm__newPass = $("#frm__newPass");
    $('#frm__newPass').submit(function(e){                         
        e.preventDefault();

        $.ajax({ 
            url: "../controlador/controlador_new_password.php", 
            type: "POST",    
            data:  $("#frm__newPass").serialize(),    
            success: function(data) {
                console.log(data);
                $("#err__password").html('');
                $("#err__password2").html('');
                $("#message").html(data);
                 
            }
        });			        	 							     			
    });
});
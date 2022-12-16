$(document).ready(function() {
    frm__recover = $("#frm__recover");
    $('#frm__recover').submit(function(e){                         
        e.preventDefault();

        $.ajax({ 
            url: "../controlador/recover_password.php", 
            type: "POST",    
            data:  $("#frm__recover").serialize(),    
            success: function(data) {
                console.log(data);
                $("#err__email").html('');
                $("#message").html(data);
                 
            }
        });			        	 							     			
    });
});
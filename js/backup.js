$(document).ready(function() {

    frm__backup = $("#frm__backup");
    $('#frm__backup').submit(function(e){                         
        e.preventDefault();

        $.ajax({ 
            url: "../controlador/controlador_backup.php", 
            type: "POST",    
            data:  $("#frm__backup").serialize(),     
            success: function(data) {
                console.log(data);
                if(data == 1){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '¡Respaldo creado con exito!',
                        showConfirmButton: true  
                    })

                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Oops...',
                        text: '¡Algo salió mal!',
                        showConfirmButton: true  
                    }).then(function() {
                        window.location = '../vistas/backup.php';
                    })
                }   
            }
        });

    });

    $("#btn__cancelbackup").click(function(){
        window.location = '../vistas/index.php';
    })

});
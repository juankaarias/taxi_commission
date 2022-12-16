<?php

    require_once('../modelo/usuarios.php');
    $modeloUsuarios = new Usuarios();
    $modeloUsuariosToken = new Usuarios();
    $modeloUsuariosAddToken = new Usuarios();

    if(isset($_POST['email']) || isset($_POST['token']) || isset($_POST['password']) || isset($_POST['password2'])) {

        $message = null;

        $correo = trim(strtolower(filter_var($_POST['email'], FILTER_SANITIZE_STRING)));
        $token = trim(filter_var($_POST['token'], FILTER_SANITIZE_STRING));
        $clave = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
        $confirmarClave = trim(filter_var($_POST['password2'], FILTER_SANITIZE_STRING));
        

        if(empty($correo) || !preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $correo) || empty($token) || !preg_match("/^[a-zA\d-]{32}$/", $token)){
            /* $message = "<script>Swal.fire({position: 'center', icon: 'error', title: 'Oops ha ocurrido un error', text:'¡Algo salio mal, verifica los datos y vuelve a intentarlo!',showConfirmButton: false, timer: 2500});document.getElementById('err__password').innerHTML='¡Digite una contraseña valida!'; document.getElementById('err__password2').innerHTML='¡Digite una contraseña valida!';</script>"; */
            $message = "<script>window.location='../vista/index.php';</script>";

        }else if(empty($clave) || !preg_match("/^(?=(?:.*[A-Z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*\d){1,})(?=(?:.*[!@#$%^&*()\-_=+{};:,.>]){1,})(.{8,})$/", $clave)){
            $message = "<script>Swal.fire({position: 'center', icon: 'error', title: 'Oops...', text:'¡Verifica los datos y vuelve a intentarlo!', showConfirmButton: false, timerProgressBar: true, timer: 2500}); document.getElementById('err__password').innerHTML='La contraseña debe tener al menos 8 caracteres e incluir mayúsculas, minusculas, caracteres y numeros.';</script>";

        }else if(empty($confirmarClave) || !preg_match("/^(?=(?:.*[A-Z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*\d){1,})(?=(?:.*[!@#$%^&*()\-_=+{};:,.>]){1,})(.{8,})$/", $confirmarClave)){
            $message = "<script>Swal.fire({position: 'center', icon: 'error', title: 'Oops...', text:'¡Verifica los datos y vuelve a intentarlo!', showConfirmButton: false, timerProgressBar: true, timer: 2500}); document.getElementById('err__password2').innerHTML='La contraseña debe tener al menos 8 caracteres e incluir mayúsculas, minusculas, caracteres y numeros.';</script>";

        }else if($clave != $confirmarClave){
            $message = "<script>Swal.fire({position: 'center', icon: 'error', title: 'Oops...', text:'¡Verifica los datos y vuelve a intentarlo!', showConfirmButton: false, timerProgressBar: true, timer: 2500}); document.getElementById('err__password2').innerHTML='¡Las contraseñas no coinciden!';</script>";
        }

        if($message == null){  
            $resultado = $modeloUsuarios->validarToken($correo, $token);
            
            if($resultado != null){
                $message = "<script> Swal.fire({ position: 'center', icon: 'success', title: '¡Exito!', text:'Su contraseña ha sido restablecida correctamente', showConfirmButton: false, timerProgressBar: true, timer: 3500}).then(function() {window.location = '../vista/index.php';});frm__newPass[0].reset();</script>"; 
                $respuesta = $modeloUsuarios->updateLogin($correo, $clave);
                $token = $modeloUsuariosToken->generarTokenClave();
                $reset = $modeloUsuariosAddToken->addToken($token, $correo);
            }else{
                $message = "<script>window.location='../vista/index.php';</script>";
                $message = "<script>Swal.fire({position: 'center', icon: 'error', title: '¡Enlace no vigente!', text:'Por favor restablece tu contraseña nuevamente',showConfirmButton: false, timerProgressBar: true, timer: 3000}).then(function() {window.location = '../vista/index.php';});frm__newPass[0].reset();</script>";
            }
        }
        echo $message;

    }else{
        header('Location: ../vista/index.php');
    }






?>
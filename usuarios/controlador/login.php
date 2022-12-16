<?php
    session_start();

    require_once('../modelo/usuarios.php');
    $modeloUsuarios = new Usuarios();

    if(isset($_POST['email']) && isset($_POST['password'])){

        $emailLogin = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $passwordLogin = filter_var($_POST['password'], FILTER_SANITIZE_STRING);  

        $messageErrors = [];

        if(empty($emailLogin) || !preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $emailLogin)){
            $messageErrors['email'] = '<span class="text__alert">Verifique el correo electrónico y la contraseña.</span>';
        }
        if(empty($passwordLogin) || !preg_match("/^(?=(?:.*[A-Z]){1,})(?=(?:.*[a-z]){1,})(?=(?:.*\d){1,})(?=(?:.*[!@#$%^&*()\-_=+{};:,.>]){1,})(.{8,})$/", $passwordLogin)){
            $messageErrors['password'] = '<span class="text__alert">Verifique el correo electrónico y/o la contraseña.</span>';
        }
        
        if(count($messageErrors) > 0){
            $messageErrors['status_error'] = '<i class="icono__alert fa-solid fa-bell"></i><br>¡Se ha producido un problema al iniciar sesión!';
            $messageErrors['email'] = '<span class="text__alert">Verifique el correo electrónico y/o la contraseña.</span>';
            $messageErrors['password'] = '<span class="text__alert">Verifique el correo electrónico y/o la contraseña.</span>';
            $_SESSION['messageErrors'] = $messageErrors;
            $messageErrors = 0;
            header('Location: ../vista/index.php');

        }else if($modeloUsuarios->login($emailLogin, $passwordLogin) == 1){  /* El numero es el tipo de usuario */
            header('Location: ../../administrador/vistas/index.php'); 
        }else{
            $messageErrors['status_error'] = '<i class="icono__alert fa-solid fa-bell"></i><br>¡Se ha producido un problema al iniciar sesión!';
            $messageErrors['email'] = '<span class="text__alert">Verifique el correo electrónico y/o la contraseña.</span>';
            $messageErrors['password'] = '<span class="text__alert">Verifique el correo electrónico y/o la contraseña.</span>';
            $_SESSION['messageErrors'] = $messageErrors;
            header("Location: ../vista/index.php");
        }
    }else{
        header("Location: ../vista/index.php");
    }
?>
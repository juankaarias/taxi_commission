<?php
    require_once("../modelo/usuarios.php");
    $modeloUsuarios = new Usuarios();
    $modeloUsuarios->cerrarSesion();
    header('Location: ../vista/index.php');
?>
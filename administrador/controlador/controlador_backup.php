<?php
    if ($_POST){
        if ($_POST["backup"]){
            require_once("../modelo/administrador.php");
            $backupdb = new Admnistrador();
            $backupdb->config();
            /* echo "<a href='{$backupdb->getRuta()}'>Descargar archivo .sql</a>"; */
            header('Location: ../vistas/backup.php');
        }
    } 
?> 
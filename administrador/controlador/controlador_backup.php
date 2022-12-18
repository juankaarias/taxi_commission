<?php

    if(isset($_POST['backup'])){
        $opcion = trim(filter_var($_POST['backup'], FILTER_VALIDATE_INT));

        if(!empty($opcion) || is_numeric($opcion)){
           
            if($opcion == 1){

                require_once("../modelo/administrador.php");
                $backupdb = new Admnistrador();

                $backupdb->config();
                $data = 1;
                print json_encode($data, JSON_UNESCAPED_UNICODE);
            }else{
                $data = 2;
                print json_encode($data, JSON_UNESCAPED_UNICODE);
            }
            
            
        }else{
            print json_encode($data, JSON_UNESCAPED_UNICODE);
        }
        
    }else{
        header("Location: ../vistas/backup.php");
    }    


    /* if (isset($_POST["backup"])){
        if ($_POST["backup"]){
            require_once("../modelo/administrador.php");
            $backupdb = new Admnistrador();
            $data = $backupdb->config();
            print json_encode($data, JSON_UNESCAPED_UNICODE);
             echo "<a href='{$backupdb->getRuta()}'>Descargar archivo .sql</a>"; 
             header('Location: ../vistas/backup.php'); 
        }
    }  */
?> 
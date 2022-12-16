<?php
    require_once('../modelo/administrador.php');
    $modeloAdmin = new Admnistrador();

    
    if(isset($_POST['fecha_de']) || isset($_POST['fecha_a'])){
                
        if(empty($_POST['fecha_de']) || !preg_match("/^(((20[012]\d|19\d\d)|(1\d|2[0123]))-((0[0-9])|(1[012]))-((0[1-9])|([12][0-9])|(3[01])))|(((0[1-9])|([12][0-9])|(3[01]))-((0[0-9])|(1[012]))-((20[012]\d|19\d\d)|(1\d|2[0123])))|(((20[012]\d|19\d\d)|(1\d|2[0123]))\/((0[0-9])|(1[012]))\/((0[1-9])|([12][0-9])|(3[01])))|(((0[0-9])|(1[012]))\/((0[1-9])|([12][0-9])|(3[01]))\/((20[012]\d|19\d\d)|(1\d|2[0123])))|(((0[1-9])|([12][0-9])|(3[01]))\/((0[0-9])|(1[012]))\/((20[012]\d|19\d\d)|(1\d|2[0123])))|(((0[1-9])|([12][0-9])|(3[01]))\.((0[0-9])|(1[012]))\.((20[012]\d|19\d\d)|(1\d|2[0123])))|(((20[012]\d|19\d\d)|(1\d|2[0123]))\.((0[0-9])|(1[012]))\.((0[1-9])|([12][0-9])|(3[01])))$/", $_POST['fecha_de']) || empty($_POST['fecha_a']) || !preg_match("/^(((20[012]\d|19\d\d)|(1\d|2[0123]))-((0[0-9])|(1[012]))-((0[1-9])|([12][0-9])|(3[01])))|(((0[1-9])|([12][0-9])|(3[01]))-((0[0-9])|(1[012]))-((20[012]\d|19\d\d)|(1\d|2[0123])))|(((20[012]\d|19\d\d)|(1\d|2[0123]))\/((0[0-9])|(1[012]))\/((0[1-9])|([12][0-9])|(3[01])))|(((0[0-9])|(1[012]))\/((0[1-9])|([12][0-9])|(3[01]))\/((20[012]\d|19\d\d)|(1\d|2[0123])))|(((0[1-9])|([12][0-9])|(3[01]))\/((0[0-9])|(1[012]))\/((20[012]\d|19\d\d)|(1\d|2[0123])))|(((0[1-9])|([12][0-9])|(3[01]))\.((0[0-9])|(1[012]))\.((20[012]\d|19\d\d)|(1\d|2[0123])))|(((20[012]\d|19\d\d)|(1\d|2[0123]))\.((0[0-9])|(1[012]))\.((0[1-9])|([12][0-9])|(3[01])))$/", $_POST['fecha_a'])){
            header("Location: ../vistas/commissions_effective.php");

        }else{
            echo $fecha_de = $_POST['fecha_de'];
            echo $fecha_a = $_POST['fecha_a'];
            if($fecha_de > $fecha_a){
                /* header("Location: all-user-reports.php");*/
                echo "La fecha no puede ser mayor"; 
            }else if($fecha_de == $fecha_a){
                echo "la fecha es igual";
                echo $where = "date_time_report LIKE '$fecha_de%'";  
            }else{
                echo $f_de = $fecha_de.' 00:00:00';
                echo $f_a = $fecha_a.' 23:59:59';
                echo $where = "date_time_report BETWEEN '$f_de' AND '$f_a'";
            } 
        }
        
        /* $where = "YEAR(`date_time_report`) = YEAR(CURRENT_DATE()) AND MONTH(`date_time_report`) AND DAY(`date_time_report`)= DAY(CURRENT_DATE())"; */
            
            
       
        

    }else{
        header("Location: ../vistas/commissions_effective.php");
    }

    
    



?>
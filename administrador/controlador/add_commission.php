<?php
    require_once('../modelo/administrador.php');
    require_once('../../usuarios/modelo/usuarios.php');
    $modeloUsuarios = new Usuarios();
    $modeloAdmin = new Admnistrador();

    if(isset($_POST['opcion']) || is_numeric($_POST['opcion'])  || preg_match("/^\d{1,}$/", $_POST['opcion'])){
        $opcion = $_POST['opcion'];
    }else{
        header("Location: ../vistas/add_commission.php");
    }

    switch($opcion){
        case 1:
            
            $IdComisionista = trim(filter_var($_POST['IdComisionista'], FILTER_VALIDATE_INT));
            $IdentificacionComisionista = trim(strtoupper(filter_var($_POST['IdentificacionComisionista'], FILTER_SANITIZE_STRING)));  
            $NombresComisionista = trim(ucfirst(strtolower(filter_var($_POST['NombresComisionista'], FILTER_SANITIZE_STRING)))); 
            $ApellidosComisionista = trim(ucfirst(strtolower(filter_var($_POST['ApellidosComisionista'], FILTER_SANITIZE_STRING)))); 
            $PuntoComisionista = trim(ucfirst(strtolower(filter_var($_POST['PuntoComisionista'], FILTER_SANITIZE_STRING)))); 
            $DireccionComisionista = trim(ucfirst(strtolower(filter_var($_POST['DireccionComisionista'], FILTER_SANITIZE_STRING)))); 
            $DestinoComisionista = trim(ucfirst(strtolower(filter_var($_POST['DestinoComisionista'], FILTER_SANITIZE_STRING)))); 
                
            $IdConductor = trim(filter_var($_POST['IdConductor'], FILTER_VALIDATE_INT));
            $IdentificacionConductor = trim(strtoupper(filter_var($_POST['IdentificacionConductor'], FILTER_SANITIZE_STRING))); 
            $NombresConductor = trim(ucfirst(strtolower(filter_var($_POST['NombresConductor'], FILTER_SANITIZE_STRING)))); 
            $ApellidosConductor = trim(ucfirst(strtolower(filter_var($_POST['ApellidosConductor'], FILTER_SANITIZE_STRING)))); 
            $VehiculoConductor = trim(filter_var($_POST['VehiculoConductor'], FILTER_VALIDATE_INT)); 
            $PlacaConductor = trim(strtoupper(filter_var($_POST['PlacaConductor'], FILTER_SANITIZE_STRING))); 
            $TurnoConductor = trim(ucfirst(strtolower(filter_var($_POST['TurnoConductor'], FILTER_SANITIZE_STRING)))); 

            $messageErrors = [];

            if(empty($IdComisionista) || !is_numeric($IdComisionista) || !preg_match("/^\d{1,}$/", $IdComisionista)){
                $messageErrors['identcom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";
                $messageErrors['nombresCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";
                $messageErrors['apellidosCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!"; 
                $messageErrors['nombrePunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un nombre valido!";
                $messageErrors['direccionPunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una dirección valida!";
                $messageErrors['posibleDestino'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Indique un destino valido!"; 
            }else{
                if(empty($IdentificacionComisionista) || !preg_match("/^([a-zA-ZÀ-ÿ\s]){0,}\d{5,}$/", $IdentificacionComisionista) || strlen($IdentificacionComisionista) > 20){
                    $messageErrors['identcom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!"; 
                }
                if(empty($NombresComisionista) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $NombresComisionista)){
                    $messageErrors['nombresCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!"; 
                }
                if(empty($ApellidosComisionista) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $ApellidosComisionista)){
                    $messageErrors['apellidosCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!"; 
                }
                if(empty($PuntoComisionista) || !preg_match("/^(?=(?:.*[a-zA-ZÀ-ÖØ-öø-ÿ\s.,-]){3,})(?=(?:.*\d){0,})(.{3,100})$/", $PuntoComisionista)){
                    $messageErrors['nombrePunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un nombre valido!"; 
                }
                if(empty($DireccionComisionista) || !preg_match("/^(?=(?:.*[a-zA-ZÀ-ÖØ-öø-ÿ\s.,#-]){3,})(?=(?:.*\d){0,})(.{3,100})$/", $DireccionComisionista)){
                    $messageErrors['direccionPunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una dirección valida!";
                }
                if(empty($DestinoComisionista) || !preg_match("/^(?=(?:.*[a-zA-ZÀ-ÖØ-öø-ÿ\s.,#-]){3,})(?=(?:.*\d){0,})(.{3,100})$/", $DestinoComisionista)){
                    $messageErrors['posibleDestino'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un destino valido!"; 
                }
            }

            if(empty($IdConductor) || !is_numeric($IdConductor) || !preg_match("/^\d{1,}$/", $IdConductor)){
                $messageErrors['identCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";  
                $messageErrors['nombresCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";   
                $messageErrors['apellidosCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!";   
                $messageErrors['codVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un codigo de vehículo valido!";
                $messageErrors['placaVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una placa de vehículo valida!";
                $messageErrors['turnoCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un turno valido!";
            }else{
                if(empty($IdentificacionConductor) || !preg_match("/^([a-zA-ZÀ-ÿ\s]){0,}\d{5,}$/", $IdentificacionConductor) || strlen($IdentificacionConductor) > 20){
                    $messageErrors['identCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";   
                }
                if(empty($NombresConductor) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $NombresConductor)){
                    $messageErrors['nombresCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";   
                }
                if(empty($ApellidosConductor) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $ApellidosConductor)){
                    $messageErrors['apellidosCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!";  
                }
                if(empty($VehiculoConductor) || !is_numeric($VehiculoConductor) || !preg_match("/^\d{1,}$/", $VehiculoConductor)){
                    $messageErrors['codVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un codigo de vehículo valido!";
                }
                if(empty($PlacaConductor) || !preg_match("/^([a-zA-ZÀ-ÿ\s]){3,}\d{3,}$/", $PlacaConductor) || strlen($PlacaConductor) > 10){
                    $messageErrors['placaVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una placa de vehículo valida!";
                }
                if(empty($TurnoConductor) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $TurnoConductor)){
                    $messageErrors['turnoCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un turno valido!";
                }
            }
                
            if(count($messageErrors) > 0){
                print json_encode($messageErrors, JSON_UNESCAPED_UNICODE);

            }else if(($comisionista=$modeloAdmin->getValidarComisionista($IdComisionista, $IdentificacionComisionista, $NombresComisionista, $ApellidosComisionista, $PuntoComisionista, $DireccionComisionista, $DestinoComisionista) != null) && ($Conductor=$modeloAdmin->getValidarCondutor($IdConductor, $IdentificacionConductor, $NombresConductor, $ApellidosConductor, $VehiculoConductor, $PlacaConductor, $TurnoConductor) != null)){  
                date_default_timezone_set('America/Bogota');
                $fechaHoraActual = date("Y-m-d H:i:s");
                $idUser = $modeloUsuarios->getIdUsuario();
                $datos = $modeloAdmin->addComision($fechaHoraActual, $idUser, $IdComisionista, $IdConductor, $DestinoComisionista);

                print json_encode($datos, JSON_UNESCAPED_UNICODE);

            }else{

                $messageErrors['identcom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";
                $messageErrors['nombresCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";
                $messageErrors['apellidosCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!"; 
                $messageErrors['nombrePunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un nombre valido!";
                $messageErrors['direccionPunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una dirección valida!";
                $messageErrors['posibleDestino'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Indique un destino valido!";  

                $messageErrors['identCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";  
                $messageErrors['nombresCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";   
                $messageErrors['apellidosCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!";   
                $messageErrors['codVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un codigo de vehículo valido!";
                $messageErrors['placaVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una placa de vehículo valida!";
                $messageErrors['turnoCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un turno valido!";

                print json_encode($messageErrors, JSON_UNESCAPED_UNICODE);
            }
            
                

        break;    
        case 2:        
            /* $consulta = "UPDATE usuarios SET username='$username', first_name='$first_name', last_name='$last_name', gender='$gender', password='$password', status='$status' WHERE user_id='$user_id' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();        
            
            $consulta = "SELECT * FROM usuarios WHERE user_id='$user_id' ";       
            $resultado = $conexion->prepare($consulta);
            $resultado->execute();
            $data=$resultado->fetchAll(PDO::FETCH_ASSOC);  */
        break;
        case 3:        
            /*  $consulta = "DELETE FROM usuarios WHERE user_id='$user_id' ";		
            $resultado = $conexion->prepare($consulta);
            $resultado->execute(); */                            
        break;
        case 4:    
            $data = $modeloAdmin->getComisionPendiente();
            print json_encode($data, JSON_UNESCAPED_UNICODE);
        break;
        
    } 


    /* if(isset($_POST['idcom']) && isset($_POST['identcom']) && isset($_POST['nombresCom']) && isset($_POST['apellidosCom']) && isset($_POST['nombrePunto']) && isset($_POST['direccionPunto']) && isset($_POST['posibleDestino']) && isset($_POST['idCond']) && isset($_POST['identCond']) && isset($_POST['nombresCond']) && isset($_POST['apellidosCond']) && isset($_POST['codVeh']) && isset($_POST['placaVeh']) && isset($_POST['turnoCond'])){
        
        $IdComisionista = trim(filter_var($_POST['idcom'], FILTER_VALIDATE_INT));
        $IdentificacionComisionista = trim(strtoupper(filter_var($_POST['identcom'], FILTER_SANITIZE_STRING)));  
        $NombresComisionista = trim(ucfirst(strtolower(filter_var($_POST['nombresCom'], FILTER_SANITIZE_STRING)))); 
        $ApellidosComisionista = trim(ucfirst(strtolower(filter_var($_POST['apellidosCom'], FILTER_SANITIZE_STRING)))); 
        $PuntoComisionista = trim(ucfirst(strtolower(filter_var($_POST['nombrePunto'], FILTER_SANITIZE_STRING)))); 
        $DireccionComisionista = trim(ucfirst(strtolower(filter_var($_POST['direccionPunto'], FILTER_SANITIZE_STRING)))); 
        $DestinoComisionista = trim(ucfirst(strtolower(filter_var($_POST['posibleDestino'], FILTER_SANITIZE_STRING)))); 
         
        $IdConductor = trim(filter_var($_POST['idCond'], FILTER_VALIDATE_INT));
        $IdentificacionConductor = trim(strtoupper(filter_var($_POST['identCond'], FILTER_SANITIZE_STRING))); 
        $NombresConductor = trim(ucfirst(strtolower(filter_var($_POST['nombresCond'], FILTER_SANITIZE_STRING)))); 
        $ApellidosConductor = trim(ucfirst(strtolower(filter_var($_POST['apellidosCond'], FILTER_SANITIZE_STRING)))); 
        $VehiculoConductor = trim(filter_var($_POST['codVeh'], FILTER_VALIDATE_INT)); 
        $PlacaConductor = trim(strtoupper(filter_var($_POST['placaVeh'], FILTER_SANITIZE_STRING))); 
        $TurnoConductor = trim(ucfirst(strtolower(filter_var($_POST['turnoCond'], FILTER_SANITIZE_STRING)))); 

        $messageErrors = [];

        if(empty($IdComisionista) || !is_numeric($IdComisionista) || !preg_match("/^\d{1,}$/", $IdComisionista)){
            $messageErrors['identcom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";
            $messageErrors['nombresCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";
            $messageErrors['apellidosCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!"; 
            $messageErrors['nombrePunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un nombre valido!";
            $messageErrors['direccionPunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una dirección valida!";
            $messageErrors['posibleDestino'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Indique un destino valido!"; 
        }else{
            if(empty($IdentificacionComisionista) || !preg_match("/^([a-zA-ZÀ-ÿ\s]){0,}\d{5,}$/", $IdentificacionComisionista) || strlen($IdentificacionComisionista) > 20){
                $messageErrors['identcom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!"; 
            }
            if(empty($NombresComisionista) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $NombresComisionista)){
                $messageErrors['nombresCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!"; 
            }
            if(empty($ApellidosComisionista) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $ApellidosComisionista)){
                $messageErrors['apellidosCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!"; 
            }
            if(empty($PuntoComisionista) || !preg_match("/^(?=(?:.*[a-zA-ZÀ-ÖØ-öø-ÿ\s.,-]){3,})(?=(?:.*\d){0,})(.{3,100})$/", $PuntoComisionista)){
                $messageErrors['nombrePunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un nombre valido!"; 
            }
            if(empty($DireccionComisionista) || !preg_match("/^(?=(?:.*[a-zA-ZÀ-ÖØ-öø-ÿ\s.,#-]){3,})(?=(?:.*\d){0,})(.{3,100})$/", $DireccionComisionista)){
                $messageErrors['direccionPunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una dirección valida!";
            }
            if(empty($DestinoComisionista) || !preg_match("/^(?=(?:.*[a-zA-ZÀ-ÖØ-öø-ÿ\s.,#-]){3,})(?=(?:.*\d){0,})(.{3,100})$/", $DestinoComisionista)){
                $messageErrors['posibleDestino'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un destino valido!"; 
            }
        }

        if(empty($IdConductor) || !is_numeric($IdConductor) || !preg_match("/^\d{1,}$/", $IdConductor)){
            $messageErrors['identCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";  
            $messageErrors['nombresCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";   
            $messageErrors['apellidosCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!";   
            $messageErrors['codVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un codigo de vehículo valido!";
            $messageErrors['placaVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una placa de vehículo valida!";
            $messageErrors['turnoCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un turno valido!";
        }else{
            if(empty($IdentificacionConductor) || !preg_match("/^([a-zA-ZÀ-ÿ\s]){0,}\d{5,}$/", $IdentificacionConductor) || strlen($IdentificacionConductor) > 20){
                $messageErrors['identCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";   
            }
            if(empty($NombresConductor) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $NombresConductor)){
                $messageErrors['nombresCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";   
            }
            if(empty($ApellidosConductor) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $ApellidosConductor)){
                $messageErrors['apellidosCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!";  
            }
            if(empty($VehiculoConductor) || !is_numeric($VehiculoConductor) || !preg_match("/^\d{1,}$/", $VehiculoConductor)){
                $messageErrors['codVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un codigo de vehículo valido!";
            }
            if(empty($PlacaConductor) || !preg_match("/^([a-zA-ZÀ-ÿ\s]){3,}\d{3,}$/", $PlacaConductor) || strlen($PlacaConductor) > 10){
                $messageErrors['placaVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una placa de vehículo valida!";
            }
            if(empty($TurnoConductor) || !preg_match("/^[a-zA-ZÀ-ÿ\s]{3,50}$/", $TurnoConductor)){
                $messageErrors['turnoCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un turno valido!";
            }
        }
        
        if(count($messageErrors) > 0){
            print json_encode($messageErrors, JSON_UNESCAPED_UNICODE);

        }else if(($comisionista=$modeloAdmin->getValidarComisionista($IdComisionista, $IdentificacionComisionista, $NombresComisionista, $ApellidosComisionista, $PuntoComisionista, $DireccionComisionista, $DestinoComisionista) != null) && ($Conductor=$modeloAdmin->getValidarCondutor($IdConductor, $IdentificacionConductor, $NombresConductor, $ApellidosConductor, $VehiculoConductor, $PlacaConductor, $TurnoConductor) != null)){  
            date_default_timezone_set('America/Bogota');
            $fechaHoraActual = date("Y-m-d H:i:s");
            $idUser = $modeloUsuarios->getIdUsuario();
            $data = $modeloAdmin->addComision($fechaHoraActual, $idUser, $IdComisionista, $IdConductor, $DestinoComisionista);
            print json_encode($data, JSON_UNESCAPED_UNICODE);
            
        }else{

            $messageErrors['identcom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";
            $messageErrors['nombresCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";
            $messageErrors['apellidosCom'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!"; 
            $messageErrors['nombrePunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un nombre valido!";
            $messageErrors['direccionPunto'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una dirección valida!";
            $messageErrors['posibleDestino'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Indique un destino valido!";  

            $messageErrors['identCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una identificación valida!";  
            $messageErrors['nombresCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite nombres validos!";   
            $messageErrors['apellidosCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite apellidos validos!";   
            $messageErrors['codVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un codigo de vehículo valido!";
            $messageErrors['placaVeh'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite una placa de vehículo valida!";
            $messageErrors['turnoCond'] = "<i class='text__alert fa-solid fa-circle-xmark'></i> ¡Digite un turno valido!";

            print json_encode($messageErrors, JSON_UNESCAPED_UNICODE);
        }

    }else{
        header("Location: ../vistas/add_commission.php");
    } */















?>
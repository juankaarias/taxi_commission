<?php
    require_once('../../config/conexion.php');

    session_start();

    class Usuarios extends Conexion{
        
        public function __construct(){
            $this->db = parent::__construct();
        }

        public function login($emailLogin, $passwordLogin){
            $sqlLogin = "CALL proc_alm_login(:emailLogin, :passwordLogin, @id_usuario, @nombre, @tipo_usuario)";
            $statement = $this->db->prepare($sqlLogin);
            $statement->bindParam(':emailLogin',$emailLogin, PDO::PARAM_STR, 100);
            $statement->bindParam(':passwordLogin',$passwordLogin, PDO::PARAM_STR, 100);
            $result = $statement->execute();
            if($result != null){
                
                $result = $this->db->query("SELECT @id_usuario, @nombre, @tipo_usuario")->fetch();
                $_SESSION['id_user'] = $result["@id_usuario"];
                $_SESSION['name_user'] = $result["@nombre"];
                $_SESSION['tipo_user'] = $result["@tipo_usuario"];

                $statement->closeCursor();
                $statement = null;
                $this->db = null;

                return $result["@tipo_usuario"];
            }
            $statement->closeCursor();
            $statement = null;
            $this->db = null;

            return false;  
        }

        public function getEmail($emailrecover){
            $rows= null;
            $sqlRecover = "CALL proc_alm_recuperar(:emailrecover)";
            $statement = $this->db->prepare($sqlRecover);
            $statement->bindParam(':emailrecover',$emailrecover, PDO::PARAM_STR, 100);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }

        function generarTokenClave() {
            $r1 = bin2hex(random_bytes(5));
            $r2 = bin2hex(openssl_random_pseudo_bytes(5));
            $r3 = bin2hex(random_bytes(5));
            $token = $r1.'-'.$r2.'-'.$r3;
            return $token;
        }

        function addToken($token, $correo){
            $sqlAddToken = "CALL proc_alm_agregar_token(:token, :correo)";
            $statement = $this->db->prepare($sqlAddToken);
            $statement->bindParam(':token',$token, PDO::PARAM_STR, 100);
            $statement->bindParam(':correo',$correo, PDO::PARAM_STR, 100);
            if($statement->execute()){
                $resultado = 1;
                $statement->closeCursor();
                $statement = null;
                $this->db = null; 
                return $resultado;
            }
            $statement->closeCursor();
            $statement = null;
            $this->db = null;
            return false;
        }

        function validarToken($correo, $token){
            $rows= null;
            $sqlValidateToken = "CALL proc_alm_validar_token(:correo, :token)";
            $statement = $this->db->prepare($sqlValidateToken);
            $statement->bindParam(':correo',$correo, PDO::PARAM_STR, 100);
            $statement->bindParam(':token',$token, PDO::PARAM_STR, 100);
            $result = $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
        
        function updateLogin($correo, $clave){
            $rows= null;
            $sqlUpdateLogin = "CALL proc_alm_update_password(:correo, :clave)";
            $statement = $this->db->prepare($sqlUpdateLogin);
            $statement->bindParam(':correo',$correo, PDO::PARAM_STR, 100);
            $statement->bindParam(':clave',$clave, PDO::PARAM_STR, 100);
            if($statement->execute()){
                $resultado = 1;
                $statement->closeCursor();
                $statement = null;
                $this->db = null; 
                return $resultado;
            }
            $statement->closeCursor();
            $statement = null;
            $this->db = null;
            return false;
        }


        public function getNombre(){
            return $_SESSION['name_user'];
        }

        public function getIdUsuario(){
            return $_SESSION['id_user'];
        }
    
        public  function getTipoUsuario(){
            return $_SESSION['tipo_user'];
        }

        public function validarSesion(){
            if($_SESSION['id_user'] == null){
                header('Location: ../../usuarios/vista/index.php');
            }
        }

        public function validarSesionAdministrador(){
            if($_SESSION['id_user'] == null || $_SESSION['tipo_user'] != 1){
                header('Location: ../../usuarios/vista/index.php');
            }
        }  

        public function cerrarSesion(){
            session_unset();
            session_destroy();
        }

        function showError($errors, $field) {
            $alert = '';
            if (isset($errors[$field]) && !empty($field)) {
                $alert = $errors[$field];
            }
            return $alert;
        }
        
        function clearErrors() {
            if (isset($_SESSION['messageErrors'])) $_SESSION['messageErrors'] = null;
            if (isset($_SESSION['status_success']))$_SESSION['status_success'] = null;
            if (isset($_SESSION['status_error'])) $_SESSION['status_error'] = null;
            return true;
        }
    }
?>
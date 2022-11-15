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
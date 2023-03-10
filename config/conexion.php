<?php
    class Conexion{
        protected $db;
        private $dsn = "mysql:dbname=sistema_comisiones;host=localhost";
        private $host = "localhost";
        private $dbname = "sistema_comisiones";
        private $user = "root";
        private $pass = "";
        
        public function __construct(){
            $arrOptions = array(
                PDO::ATTR_EMULATE_PREPARES => FALSE, 
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
            );
            try{
                $db = new PDO($this->dsn, $this->user, $this->pass, $arrOptions);
                return $db;
            }catch(PDOException $e){
                echo "<strong>¡Error Connection: </strong><br>".$e->getMessage() . "<br><br><strong>Linea: </strong> " . $e->getLine();
                die();
            }
        }

        
        public function getServidor():string{
            return $this->host;
        }

        public function getdb():string{
            return $this->dbname;
        }

        public function getUsuario():string{
            return $this->user;
        }

        public function getContrasena():string{
            return $this->pass;
        }


    }

    
    
?> 


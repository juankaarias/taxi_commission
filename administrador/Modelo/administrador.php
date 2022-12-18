<?php
    require_once('../../config/conexion.php');


    class Admnistrador extends Conexion{
        
        private $ruta = "";

        public function __construct(){
            $this->db = parent::__construct();
            /* echo $this->config(); */
        }


        function config():string{

            date_default_timezone_set('America/Bogota');
            $fecha = date("d-m-Y__h-i-a");
            $this->ruta = "../../backup/{$this->getdb()}__{$fecha}.sql";
            if(is_writable("../../backup")){
                $ruta = "";
                if(file_exists($ruta)){
                    unlink($ruta);
                }
                else{

                    $comando = "mysqldump -u {$this->getUsuario()} -p'{$this->getContrasena()}' {$this->getdb()}> {$this->ruta}"; 
                    return system($comando);
                }
            }
            else{
                return "El directorio no tiene permisos de escritura.";
            }
        }

        public function getRuta():string{
            return $this->ruta;
        }


        public function addComision($fechaHoraActual, $idUser, $IdComisionista, $IdConductor, $DestinoComisionista){
            $sqlAddComision = "CALL proc_alm_agregar_comision(:fechaHoraActual, :idUser, :IdComisionista, :IdConductor, :DestinoComisionista)";
            $statement = $this->db->prepare($sqlAddComision);
            $statement->bindParam(':fechaHoraActual',$fechaHoraActual, PDO::PARAM_STR, 100);
            $statement->bindParam(':idUser',$idUser, PDO::PARAM_STR, 100);
            $statement->bindParam(':IdComisionista',$IdComisionista, PDO::PARAM_STR, 100);
            $statement->bindParam(':IdConductor',$IdConductor, PDO::PARAM_STR, 100);
            $statement->bindParam(':DestinoComisionista',$DestinoComisionista, PDO::PARAM_STR, 100);
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

        public function getComisionPendiente(){
            $rows= null;
            $sqlComisionPendiente = "CALL proc_alm_comis_pend()";
            $statement = $this->db->prepare($sqlComisionPendiente);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }

        public function getComisionistas(){
            $rows= null;
            $sqlComisionista = "CALL proc_alm_comisionistas()";
            $statement = $this->db->prepare($sqlComisionista);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
        public function getConductores(){
            $rows= null;
            $sqlConductores = "CALL proc_alm_conductores()";
            $statement = $this->db->prepare($sqlConductores);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
        public function getValidarComisionista($IdComisionista, $IdentificacionComisionista, $NombresComisionista, $ApellidosComisionista, $PuntoComisionista, $DireccionComisionista){
            $rows= null;
            $sqlValidarCond = "CALL proc_alm_validar_comisionista(:IdComisionista, :IdentificacionComisionista, :NombresComisionista, :ApellidosComisionista, :PuntoComisionista, :DireccionComisionista)";
            $statement = $this->db->prepare($sqlValidarCond);
            $statement->bindParam(':IdComisionista',$IdComisionista, PDO::PARAM_STR, 100);
            $statement->bindParam(':IdentificacionComisionista',$IdentificacionComisionista, PDO::PARAM_STR, 100);
            $statement->bindParam(':NombresComisionista',$NombresComisionista, PDO::PARAM_STR, 100);
            $statement->bindParam(':ApellidosComisionista',$ApellidosComisionista, PDO::PARAM_STR, 100);
            $statement->bindParam(':PuntoComisionista',$PuntoComisionista, PDO::PARAM_STR, 100);
            $statement->bindParam(':DireccionComisionista',$DireccionComisionista, PDO::PARAM_STR, 100);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }
        public function getValidarCondutor($IdConductor, $IdentificacionConductor, $NombresConductor, $ApellidosConductor, $VehiculoConductor, $PlacaConductor, $TurnoConductor){
            $rows= null;
            $sqlValidarCond = "CALL proc_alm_validar_conductor(:IdConductor, :IdentificacionConductor, :NombresConductor, :ApellidosConductor, :VehiculoConductor, :PlacaConductor, :TurnoConductor)";
            $statement = $this->db->prepare($sqlValidarCond);
            $statement->bindParam(':IdConductor',$IdConductor, PDO::PARAM_STR, 100);
            $statement->bindParam(':IdentificacionConductor',$IdentificacionConductor, PDO::PARAM_STR, 100);
            $statement->bindParam(':NombresConductor',$NombresConductor, PDO::PARAM_STR, 100);
            $statement->bindParam(':ApellidosConductor',$ApellidosConductor, PDO::PARAM_STR, 100);
            $statement->bindParam(':VehiculoConductor',$VehiculoConductor, PDO::PARAM_STR, 100);
            $statement->bindParam(':PlacaConductor',$PlacaConductor, PDO::PARAM_STR, 100);
            $statement->bindParam(':TurnoConductor',$TurnoConductor, PDO::PARAM_STR, 100);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            return $rows;
        }

        public function getComisionesEfectivas(){
            $rows= null;
            $sqlComEfectivas = "CALL proc_alm_comisiones_efect()";
            $statement = $this->db->prepare($sqlComEfectivas);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            $statement->closeCursor();
            $statement = null;
            $this->db = null;
            return $rows;
        }

        public function getComisionesNoEfectivas(){
            $rows= null;
            $sqlComNoEfectivas = "CALL proc_alm_comisiones_no_efect()";
            $statement = $this->db->prepare($sqlComNoEfectivas);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            $statement->closeCursor();
            $statement = null;
            $this->db = null;
            return $rows;
        }

        public function getListUser(){
            $rows= null;
            $sqlListaUsuarios = "CALL proc_alm_list_user()";
            $statement = $this->db->prepare($sqlListaUsuarios);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            $statement->closeCursor();
            $statement = null;
            $this->db = null;
            return $rows;
        }

        public function getListTypeCommission(){
            $rows= null;
            $sqlListaTipoComision = "CALL proc_alm_list_type_commission()";
            $statement = $this->db->prepare($sqlListaTipoComision);
            $statement->execute();
            while($result = $statement->fetch()){
                $rows[] = $result;
            }
            $statement->closeCursor();
            $statement = null;
            $this->db = null;
            return $rows;
        }


        public function getById(){
            
        }

        public function update(){

        }

        public function delete(){

        }
    }


?>
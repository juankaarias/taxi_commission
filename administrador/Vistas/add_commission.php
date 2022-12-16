<?php
    require_once('../modelo/administrador.php');
    $modeloAdmin = new Admnistrador();
    $titulo="Nueva Comisión";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general"> &#187; Comisiones &#187; Asignar Comisión</p>
        </div>
        <div class="indicador__main">
            <p class="main__titulo">Asignar Comisión</p>
        </div>
    </section>

    <section class="commission__add"> 
        <section class="add__contenedor">

            <section class="contenedor__add">
                <i class="add__icono fa-solid fa-circle-plus"></i>
                <p class="add__titulo">Asignar Comisión</p>
            </section>
            
            <section class="contenedor__comision">

                <form id="frm_comision">
                    
                    <!-- Seleccionar Comisionista -->
                    <div class="comision__contenedor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Seleccionar Comisionista</h2>
                            </div>
                            <div class="comisionista__inputs">

                                <input type="hidden" id="idcom" name="idcom" readonly>

                                <div class="input-group">
                                    <input type="text" name="identcom" class="input input__search" id="identcom" autocomplete="off" readonly >
                                    <button class="btn__asignarcomisionista" id="btn__comisionista" title="Agregar Comisionista">
                                        <i class="fa-solid fa-user-plus"></i>
                                    </button>
                                    <i class="icono__input fa-solid fa-address-card"></i>
                                    <label for="identcom" class="user-label">Número Identificación</label>
                                    <div id="salida">

                                    </div>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="nombresCom"  class="input" id="nombresCom" autocomplete="off" readonly >
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label for="nombresCom" class="user-label">Nombres Comisionista</label>
                                </div>
                                <div class="input-group">
                                    <input  type="text" name="apellidosCom" autocomplete="off" class="input" id="apellidosCom" readonly >
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label for="apellidosCom" class="user-label">Apellidos Comisionista</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="nombrePunto" autocomplete="off"  class="input" id="nombrePunto" readonly >
                                    <i class="icono__input fa-solid fa-building"></i>
                                    <label for="nombrePunto" class="user-label">Nombre Punto</label>
                                </div>
                                <div class="input-group">
                                    <input  type="text" name="direccionPunto" autocomplete="off"  class="input" id="direccionPunto" readonly >
                                    <i class="icono__input fa-solid fa-street-view"></i>
                                    <label for="direccionPunto" class="user-label">Dirección Punto</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="posibleDestino" id="posibleDestino" autocomplete="off" class="input input__large">
                                    <i class="icono__input fa-solid fa-street-view"></i>
                                    <label for="posibleDestino" class="user-label">Posible destino del pasajero</label>
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <!-- Seleccionar Conductor -->
                    <div class="comision__contenedor comision__contenedor--conductor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Seleccionar Conductor</h2>
                            </div>
                            <div class="comisionista__inputs">

                                <input type="hidden" id="idCond" name="idCond">

                                <div class="input-group">
                                    <input type="text" name="identCond" id="identCond" autocomplete="off" readonly class="input input__search">
                                    <buttom class="btn__asignarconductor" id="btn__conductor" title="Agregar Conductor">
                                        <i class="fa-solid fa-user-plus"></i>
                                    </buttom>
                                    <i class="icono__input fa-solid fa-address-card"></i>
                                    <label for="identCond" class="user-label">Número Identificación</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="nombresCond" name="nombresCond" autocomplete="off" readonly class="input">
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label for="nombresCond" class="user-label">Nombres Conductor</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="apellidosCond" name="apellidosCond" autocomplete="off" readonly class="input">
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label for="apellidosCond" class="user-label">Apellidos Conductor</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="codVeh" name="codVeh" autocomplete="off" readonly class="input">
                                    <i class="icono__input fa-solid fa-id-card-clip"></i> 
                                    <label for="codVeh" class="user-label">Código Vehículo</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="placaVeh" name="placaVeh" autocomplete="off" readonly class="input">
                                    <i class="icono__input fa-solid fa-taxi"></i> 
                                    <label for="placaVeh" class="user-label">Placa Vehículo</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" id="turnoCond" name="turnoCond" autocomplete="off" readonly class="input">
                                    <i class="icono__input fa-solid fa-clock"></i> 
                                    <label for="turnoCond" class="user-label">Turno Conductor</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contenedor__submit">                          
                        <button type="submit" class="btngeneral btngeneral--buscar" title="Agregar Comisión"><i class="icono__btn fa-solid fa-plus"></i> Agregar</button>
                        <bottom class="btngeneral btngeneral--cancelar" title="Limpiar Datos" id="cancelar" type="reset"><i class="icono__btn fa-solid fa-trash"></i> Limpiar</bottom>
                    </div>
                </form>

                <!-- Comisiones Pendientes -->
                <section class="comision__espera">
                    <section class="espera__titulo espera__titulo--comision">
                        <i class="opcion__icono fa-regular fa-clock"></i>
                        <h2 class="titulo__espera">Comisiones Pendientes</h2>
                    </section>

                    <section class="espera__tabla">
                        <table id="pendientes" class="display nowrap" style="width:100%">
                            <thead class="thead__black">
                                <tr>
                                    <th>Fecha y Hora</th>
                                    <th># Comisión</th>
                                    <th>Operador</th>
                                    <th>Comisionista</th>
                                    <th>Conductor</th>
                                    <th>Destino Posible</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="add_commission">
                                           
                            </tbody>
                            <tfoot class="thead__black">
                                <tr>
                                    <th>Fecha y Hora</th>
                                    <th># Comisión</th>
                                    <th>Operador</th>
                                    <th>Comisionista</th>
                                    <th>Conductor</th>
                                    <th>Destino Posible</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </section>
                </section>

            </section>
        </section>
    </section>

    <!-- Modal Comisionista-->
    <section class="comisionista__modal">
        <div class="modal__contenedor">
            <section class="comision__espera">

                <section class="espera__titulo espera__titulo--comisionista">
                    <div class="titulo__cabecera">
                        <i class="opcion__icono fa-solid fa-person-dots-from-line"></i>
                        <h2 class="titulo__espera">Seleccionar Comisionista</h2>
                    </div>

                    <button class="asignarcomisionista__cerrar" title="Cerrar Ventana" id="btn__cerrar">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </button>
                </section>

                <div>
                    <section class="espera__tabla espera__tabla--modal ">
                        <table id="modalasignarcomisionista" class="display nowrap"  style="width:100%">
                            <thead class="thead__black">
                                <tr>
                                    <th>Id</th>
                                    <th>Identificación</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Nombre Punto</th>
                                    <th>Dirección Punto</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <?php
                                        $comisionistas = $modeloAdmin->getComisionistas();
                                        if($comisionistas != null){
                                            foreach ($comisionistas as $comisionario) {
                                                $com_id = $comisionario['Id'];  
                                                $com_ident = $comisionario['Identificación'];               
                                                $com_nombres = $comisionario['Nombres'];              
                                                $com_apellidos = $comisionario['Apellidos'];            
                                                $com_punto = $comisionario['Nombre Punto'];             
                                                $com_direccion = $comisionario['Dirección Punto'];  
                                    ?>
                                    <tr>
                                        <td id="com_id<?=$comisionario['Identificación']?>"><?=$comisionario['Id']?></td>
                                        <td id="com_ident<?=$comisionario['Identificación']?>"><?=$comisionario['Identificación']?></td>
                                        <td id="com_nombres<?=$comisionario['Identificación']?>"><?=$comisionario['Nombres']?></td>
                                        <td id="com_apellidos<?=$comisionario['Identificación']?>"><?=$comisionario['Apellidos']?></td>
                                        <td id="com_punto<?=$comisionario['Identificación']?>"><?=$comisionario['Nombre Punto']?></td>
                                        <td id="com_direccion<?=$comisionario['Identificación']?>"><?=$comisionario['Dirección Punto']?></td>
                                        <td>
                                            <a class="btn__seleccionar" href="#" onclick="agregar_comisionista('<?=$comisionario['Identificación']?>')">Seleccionar</a>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                
                            </tbody>
                        </table>
                    </section>             
                </div>
            </section>
        </div>                       
    </section>
    
    <!-- Modal Conductor-->                 
    <section class="asignarconductor__modal">
        <div class="modal__contenedor">
            <section class="comision__espera">
                <section class="espera__titulo espera__titulo--comisionista">
                    <div class="titulo__cabecera">
                        <i class="opcion__icono fa-solid fa-taxi"></i>
                        <h2 class="titulo__espera">Seleccionar Conductor</h2>
                    </div>
                    <a href="#" class="asignarconductor__cerrar" title="Cerrar Ventana" id="btn__cerrarConductor">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </a>
                </section>

                <div>
                    <section class="espera__tabla espera__tabla--modal">
                        <table id="modal__asignarconductor" class="display nowrap"  style="width:100%">
                            <thead class="thead__black">
                                <tr>
                                    <th>Id</th>
                                    <th>Identificación</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Código Vehículo</th>
                                    <th>Placa Vehículo</th>
                                    <th>Turno Conductor</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conductores = $modeloAdmin->getConductores();
                                    if($conductores != null){
                                        foreach ($conductores as $conductor) {
                                            $cond_id = $conductor['Id'];
                                            $cond_ident = $conductor['Identificación'];
                                            $cond_nombres = $conductor['Nombres'];
                                            $cond_apellidos = $conductor['Apellidos'];
                                            $cond_codigoveh = $conductor['Código Vehículo'];
                                            $cond_placaveh = $conductor['Placa Vehículo'];
                                            $cond_turno = $conductor['Turno Conductor'];
                                ?>
                                <tr>
                                    <td id="cond_id<?=$conductor['Identificación']?>"><?php echo $conductor['Id']?></td>     
                                    <td id="cond_ident<?=$conductor['Identificación']?>"><?php echo $conductor['Identificación']?></td>
                                    <td id="cond_nombres<?=$conductor['Identificación']?>"><?php echo $conductor['Nombres']?></td>
                                    <td id="cond_apellidos<?=$conductor['Identificación']?>"><?php echo $conductor['Apellidos']?></td>
                                    <td id="cond_codigoveh<?=$conductor['Identificación']?>"><?php echo $conductor['Código Vehículo']?></td>
                                    <td id="cond_placaveh<?=$conductor['Identificación']?>"><?php echo $conductor['Placa Vehículo']?></td>
                                    <td id="cond_turno<?=$conductor['Identificación']?>"><?php echo $conductor['Turno Conductor']?></td>
                                    <td>
                                        <a href="#" class="btn__seleccionar" onclick="agregar_conductor('<?=$conductor['Identificación']?>')">Seleccionar</a>
                                    </td>
                                </tr>
                                                    
                                <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
        </div>
    </section>                    

<?php include_once("../../layout/footer-app.inc.php");?>
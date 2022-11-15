<?php
    $titulo="Editar Comision Efectiva";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Comisiones /  </p>
            <a href="commissions_effective.php" class="main__link">Comisiones Efectivas</a>
            <p class="link__general">/ Editar Comisión Efectiva</p>
        </div>
    </section>
    <!-- <section class="edit__efectiva">
        <section class="efectiva__contenedor">
            <section class="contenedor__efectiva">
                <i class="efectiva__icono fa-regular fa-pen-to-square"></i>
                <p class="efectiva__titulo">Editar Comision Efectiva</p>
            </section>
            <section class="contenedor__comision">
                <section class="comision__contenedor">

                    <section class="contenedor__comisionista">
                        <section class="comisionista__cabecera">
                            <h2 class="cebecera__titulo">Comisionista</h2>
                            <section class="cabecera__linea">
                                <hr class="linea__cabecera">
                            </section>
                        </section>
                        <section class="comisionista__inputs">
                            <section class="inputs__group">
                                <label class="group__label" for="idcomisionista">Id. Comisionista</label>
                                <input class="group__input" type="text" id="idcomisionista" name="idcomisionista" required placeholder="12345112" readonly>
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="nombrescomisionista">Nombres</label>
                                <input class="group__input" type="text" id="nombrescomisionista" name="nombrescomisionista" readonly placeholder="Juan Carlos">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="apellidoscomisionista">Apellidos</label>
                                <input class="group__input" type="text" name="apellidoscomisionista" id="apellidoscomisionista" readonly placeholder="Arias Vélez">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="puntocomision">Nombre Punto</label>
                                <input class="group__input" type="text" name="puntocomision" id="puntocomision" readonly placeholder="Hotel las vegas">
                            </section>
                            <section class="inputs__group inputs__group--destino">
                                <label class="group__label group__label--destino" for="destinop">Posible Destino</label>
                                <input class="group__input group__input--destino" type="text" name="destinop" id="destinop" placeholder="Areopuerto" readonly>
                            </section>
                        </section>
                    </section>
                    <section class="contenedor__conductor">
                        <section class="comisionista__cabecera">
                            <h2 class="cebecera__titulo">Conductor</h2>
                            <section class="cabecera__linea">
                                <hr class="linea__cabecera">
                            </section>
                        </section>
                        <section class="comisionista__inputs">
                            <section class="inputs__group">
                                <label class="group__label" for="codvehiculo">Cod. Vehículo</label>
                                <input class="group__input" type="text" id="codvehiculo" name="codvehiculo" placeholder="77" required autocomplete="off" readonly>
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="nombreconductor">Nombres</label>
                                <input class="group__input" type="text" placeholder="Alexander Bustamante" readonly id="nombreconductor" name="nombreconductor">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="idconductor">Id Conductor</label>
                                <input class="group__input" type="text" placeholder="3265224" readonly id="idconductor" name="idconductor">
                            </section>
                            
                            <section class="inputs__group">
                                <label class="group__label" for="vehiculoconductor">Placa Vehículo</label>
                                <input class="group__input" type="text" id="vehiculoconductor" name="vehiculoconductor" readonly placeholder="HQM543">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="turnoconductor">Turno</label>
                                <input class="group__input" type="text" readonly placeholder="CN" id="turnoconductor" name="turnoconductor">
                            </section>
                        </section>
                    </section>
                </section>
                <form action="" method="post" class="comision__editefectiva">
                    <section class="editefectiva__cabecera">
                        <h2 class="cebecera__titulo">Comisión</h2>
                        <section class="cabecera__linea">
                            <hr class="linea__cabecera">
                        </section>
                    </section>
                    <section class="editefectiva__inputs">
                        
                        <section class="inputs__group">
                            <label class="group__label" for="nombreconductor">Estado Comisión</label>
                            <select name="conductor" id="conductor" class="group__select">
                                <i class="fa-solid fa-chevron-down"></i>
                                <option >Seleccionar</option>
                                <option value="exitosa">Exitosa</option>
                                <option value="anulada">Anulada</option>
                            </select>
                        </section>
                        <section class="inputs__group inputs__group--destino">
                            <label class="group__label group__label--destino" for="destinop">Destino Final</label>
                            <input class="group__input group__input--destino" type="text" name="destinop" id="destinop" placeholder="Areopuerto">
                        </section>
                        <section class="inputs__group">
                            <label class="group__label" for="nombreconductor">Tipo Comisión</label>
                            <select name="conductor" id="conductor" class="group__select">
                                <i class="fa-solid fa-chevron-down"></i>
                                <option >Seleccionar</option>
                                <option value="urbana">Urbana/Local</option>
                                <option value="areopuerto">Areopuerto</option>
                                <option value="viaje">Viaje</option>
                                <option value="Turismo">Turismo</option>
                            </select>
                        </section>
                        <section class="inputs__group inputs__group--destino">
                            <label class="group__label group__label--destino" for="destinop">Observaciones</label>
                            <input class="group__input group__input--destino" type="text" name="destinop" id="destinop" placeholder="El cliente cambio el destino">
                        </section>
                    </section>
                    <section class="editefectiva__submit">
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>                           
                        <input class="submit__agregar" type="submit" value="Agregar">
                        <a href="commissions_effective.php" class="submit__cancelar">
                            <p class="cancelar__btn">Cancelar</p>   
                        </a>
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>
                    </section>   
                </form> 
            </section>
        </section>
    </section> -->
    <section class="add__finish">
        <section class="finish__contenedor">

            <section class="contenedor__finish">
                <i class="efectiva__icono fa-regular fa-pen-to-square"></i>
                <p class="efectiva__titulo">Editar Comision Efectiva</p>
            </section>
            <section class="contenedor__comision">
                <form action="#" method="get">
                    <div class="comision__contenedor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Editar Estado de Comisión</h2>
                            </div>
                            <div class="comisionista__inputs">
                                <div class="input-group">
                                    <select  type="text" name="text" autocomplete="off"  class="input" id="" onChange="mostrarestado(this.value);">
                                        <option selected="true" disabled="disabled">Seleccionar Estado</option>
                                        <option value="anulada">Anulada</option>
                                        <option value="exitosa">Exitosa</option>
                                    </select>
                                    <i class="icono__input fa-solid fa-file-circle-exclamation"></i>
                                </div>
                                <div id="estadoanulada" class="opciones__anulada">
                                    <div class="input-group">
                                        <input  type="text" name="text" autocomplete="off" class="input input__large">
                                        <i class="icono__input fa-solid fa-comments"></i>
                                        <label class="user-label">Observación</label>
                                    </div>
                                </div>
                                <div id="estadoexitosa" class="opciones__exitosa">
                                    <div class="exitosa__fila">
                                        <div class="input-group">
                                            <select  type="text" name="text" autocomplete="off" class="input" id="">
                                                <option selected="true" disabled="disabled">Seleccione Tipo</option>
                                                <option value="">Urbana</option>
                                                <option value="">Areopuerto</option>
                                            </select>
                                            <i class="icono__input fa-solid fa-list-ol"></i>
                                        </div>
                                        <div class="input-group">
                                            <input  type="text" name="text" autocomplete="off" class="input">
                                            <i class="icono__input fa-solid fa-route"></i>
                                            <label class="user-label">Destino Final</label>
                                        </div>
                                        <div class="input-group">
                                            <input  type="text" name="text" autocomplete="off" class="input input__large">
                                            <i class="icono__input fa-solid fa-comments"></i>
                                            <label class="user-label">Observaciones</label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="contenedor__submit contenedor__submit--modal">                          
                                <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-floppy-disk"></i> Guardar</button>
                                <a href="add_commission.php" class="btngeneral btngeneral--cancelar">
                                    <p class="cancelar__btn"><i class="icono__btn fa-solid fa-ban"></i> Cancelar</p>   
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                
                <section class="comision__espera">
                    <section class="espera__titulo espera__titulo--comision">
                        <i class="opcion__icono fa-solid fa-file-circle-check"></i>
                        <h2 class="titulo__espera">Datos de Comisión</h2>
                    </section>
                    <div class="comision__contenedor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Datos Comisionista</h2>
                            </div>
                            <div class="comisionista__inputs">
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-address-card"></i>
                                    <label class="user-label">Número Identificación</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label class="user-label">Nombres Comisionista</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label class="user-label">Apellidos Comisionista</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-building"></i>
                                    <label class="user-label">Nombre Punto</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-street-view"></i>
                                    <label class="user-label">Dirección Punto</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input input__large">
                                    <i class="icono__input fa-solid fa-street-view"></i>
                                    <label class="user-label">Posible destino del pasajero</label>
                                </div>
                            </div> 
                        </div>
                    </div> 
                    <div class="comision__contenedor comision__contenedor--debajo">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Datos Conductor</h2>
                            </div>
                            <div class="comisionista__inputs">
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-address-card"></i>
                                    <label class="user-label">Número Identificación</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label class="user-label">Nombres Conductor</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-user-tie"></i>
                                    <label class="user-label">Apellidos Conductor</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-id-card-clip"></i> 
                                    <label class="user-label">Código Vehículo</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-taxi"></i> 
                                    <label class="user-label">Placa Vehículo</label>
                                </div>
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input">
                                    <i class="icono__input fa-solid fa-clock"></i> 
                                    <label class="user-label">Turno Conductor</label>
                                </div>
                            </div>
                        </div>
                    </div>   
                </section>
            
            </section>
        </section>
    </section>
    

<?php include_once("../../layout/footer-app.inc.php");?>



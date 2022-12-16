<?php
    $titulo="Finalizar Comision";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <p class="main__link">Asignar Comisión</p>
        </div>
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Comisiones /  </p>
            <a href="add_commission.php" class="main__link">Asignar Comisión</a>
            <p class="link__general">/ Finalizar Comisión</p>
        </div>
    </section>
    <section class="add__finish">
        <section class="finish__contenedor">

            <section class="contenedor__finish">
                <i class="add__icono fa-regular fa-floppy-disk"></i>
                <p class="finish__titulo">Finalizar Comisión</p>
            </section>
            <section class="contenedor__comision">
                <form action="#" method="get">
                    <div class="comision__contenedor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Estado de Comisión</h2>
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
                                <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-floppy-disk"></i> Finalizar</button>
                                <a href="add_commission.php" class="btngeneral btngeneral--cancelar">
                                    <p class="cancelar__btn"><i class="icono__btn fa-solid fa-ban"></i> Cancelar</p>   
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
                
                <section class="comision__espera">
                    <section class="espera__titulo espera__titulo--comision">
                        <i class="opcion__icono fa-regular fa-clock"></i>
                        <h2 class="titulo__espera">Comisión Pendiente</h2>
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



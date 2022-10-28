<?php 
    $titulo="Finalizar Comision";
    include_once("../../layout/header-app.inc.php");
?>

    <section class="add__finish">
        <section class="finish__contenedor">

            <section class="contenedor__finish">
                <i class="add__icono fa-regular fa-floppy-disk"></i>
                <p class="finish__titulo">Finalizar Comisión</p>
            </section>
            <section class="contenedor__comision">
                <form action="#" method="post">
                    <div class="comision__contenedor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Asentar Comisión</h2>
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
                </form>

            </section>
            <section class="contenedor__comision">
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
                    <div class="comision__contenedor">
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
                   
                    <!-- <section class="comisionista__inputs">
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
                    <section class="contenedor__submit">
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>                           
                        <input class="submit__agregar" type="submit" value="Agregar">
                        <a href="add_commission.php" class="submit__cancelar">
                            <p class="cancelar__btn">Cancelar</p>   
                        </a>
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>
                    </section> -->   
                </section>
            </section>
        </section>
    </section>
    

<?php include_once("../../layout/footer-app.inc.php");?>



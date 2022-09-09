<?php 
    $titulo="Editar Comision";
    include_once("../../layout/header-app.inc.php");
?>

    <section class="commission__add">
        <section class="add__contenedor">
            <section class="contenedor__add">
                <i class="add__icono fa-solid fa-circle-plus"></i>
                <p class="add__titulo">Editar Comisiones Pendientes</p>
            </section>
            <section class="contenedor__comision">
                <form action="" method="POST" class="comision__contenedor">

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
                                <input class="group__input" type="text" id="idcomisionista" name="idcomisionista" required placeholder="12345112">
                                <i class="group__search fa-solid fa-magnifying-glass" title="Buscar"></i>
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
                                <input class="group__input group__input--destino" type="text" name="destinop" id="destinop" placeholder="Areopuerto" >
                            </section>
                        </section>
                    </section>
                    <section class="contenedor__comisionista">
                        <section class="comisionista__cabecera">
                            <h2 class="cebecera__titulo">Conductor</h2>
                            <section class="cabecera__linea">
                                <hr class="linea__cabecera">
                            </section>
                        </section>
                        <section class="comisionista__inputs">
                            <section class="inputs__group">
                                <label class="group__label" for="codvehiculo">Cod. Vehículo</label>
                                <input class="group__input" type="text" id="codvehiculo" name="codvehiculo" placeholder="77" required autocomplete="off">
                                <i class="group__search fa-solid fa-magnifying-glass" title="Buscar"></i>
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="nombreconductor">Nombres</label>
                                <select name="conductor" id="conductor" class="group__select">
                                    <i class="fa-solid fa-chevron-down"></i>
                                    <option >Seleccionar</option>
                                    <option value="Luis Fernando">Luis Fernando</option>
                                    <option value="Alexander Bustamante">Alexander Bustamante</option>
                                </select>
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

                    <section class="contenedor__submit">
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>                           
                        <input class="submit__agregar" type="submit" value="Guardar">
                        <a href="add_commission.php" class="submit__cancelar">
                            <p class="cancelar__btn">Cancelar</p>   
                        </a>
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>
                    </section>
                </form> 
            </section>
        </section>
    </section>

<?php include_once("../../layout/footer-app.inc.php");?>
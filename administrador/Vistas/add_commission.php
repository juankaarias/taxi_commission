<?php 
    $titulo="Nueva Comisión";
    include_once("../../layout/header-app.inc.php");
?>

    <section class="commission__add">
        <section class="add__contenedor">
            <section class="contenedor__add">
                <i class="add__icono fa-solid fa-circle-plus"></i>
                <p class="add__titulo">Nueva Comisión</p>
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
                                <label class="group__label" for="placaconductor">Placa Vehículo</label>
                                <input class="group__input" type="text" id="placaconductor" name="placaconductor" readonly placeholder="HQL543">
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
                        <input class="submit__agregar" type="submit" value="Agregar">
                        <a href="add_commission.php" class="submit__cancelar">
                            <p class="cancelar__btn">Cancelar</p>   
                        </a>
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>
                    </section>
                </form> 
                <section class="comision__espera">
                    <section class="espera__titulo">
                        <i class="opcion__icono fa-regular fa-clock"></i>
                        <h2 class="titulo__espera">Comisiones Pendientes</h2>
                    </section>

                    <section class="espera__tabla">
                        <table id="pendientes" class="display nowrap"  style="width:100%">
                            <thead>
                                <tr>
                                    <th>Fecha y Hora</th>
                                    <th># Comisión</th>
                                    <th>Operador</th>
                                    <th>Comisionista</th>
                                    <th>Conductor</th>
                                    <th>Destino Posible</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris </td>
                                    <td>Francisco</td>
                                    <td>Alexander</td>
                                    <td>Centro</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--editar" href="edit_commission_pendiente.php">
                                            <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                            <p class="btn__tabla">Editar</p>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="tabla__btn tabla__btn--finalizar" href="add_finish_commission.php">
                                            <i class="opcion__icono fa-solid fa-up-right-from-square"></i>
                                            <p class="btn__tabla">Finalizar</p>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </section>
                </section>
            </section>
        </section>
    </section>

<?php include_once("../../layout/footer-app.inc.php");?>
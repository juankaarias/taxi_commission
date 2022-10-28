<?php 
    $titulo="Recaudo - Sistema de Comisiones";
    include_once("../../layout/header-app.inc.php");
?>

        <section class="contenedor__recaudo">
            <section class="recaudo__contenedor">
                
                <section class="contenedor__recaudar">
                    <i class="recaudar__icono fa-solid fa-cash-register"></i>
                    <p class="recaudar__titulo">Recaudo de Comisiones</p>
                </section>

                <section class="contenedor__comision"> 
                    <form action="#" method="POST" class="comision__contenedor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Seleccionar Conductor</h2>
                            </div>
                            <div class="comisionista__inputs">
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input input__search">
                                    <a href="#" class="btn__recaudoconductor">
                                        <i class="fa-solid fa-user-plus"></i>
                                    </a>
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
                            <div class="contenedor__submit">                          
                                <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-plus"></i> Agregar</button>
                                <a href="add_commission.php" class="btngeneral btngeneral--cancelar">
                                    <p class="cancelar__btn"><i class="icono__btn fa-solid fa-trash"></i> Limpiar</p>   
                                </a>
                            </div>
                        </div>
                        <section class="recaudoconductor__modal">
                            <div class="modal__contenedor">
                                <section class="comision__espera">
                                    <section class="espera__titulo espera__titulo--comisionista">
                                        <div class="titulo__cabecera">
                                            <i class="opcion__icono fa-solid fa-taxi"></i>
                                            <h2 class="titulo__espera">Seleccionar Conductor</h2>
                                        </div>
                                        <a href="#" class="recaudoconductor__cerrar" title="Cerrar Ventana">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                        </a>
                                    </section>

                                    <section class="espera__tabla">
                                        <table id="modalrecaudoconductor" class="display nowrap"  style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Identificación</th>
                                                    <th>Nombres</th>
                                                    <th>Apellidos</th>
                                                    <th>Código Vehículo</th>
                                                    <th>Placa Vehículo</th>
                                                    <th>Turno Conductor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>10829786675</td>
                                                    <td>Francisco Javier</td>
                                                    <td>Miranda Lopéz</td>
                                                    <td>77</td>
                                                    <td>TZT 232</td>
                                                    <td>Conductor Diurno</td>
                                                </tr>
                                                <tr>
                                                    <td>10829786675</td>
                                                    <td>Francisco Javier</td>
                                                    <td>Miranda Lopéz</td>
                                                    <td>77</td>
                                                    <td>TZT 232</td>
                                                    <td>Conductor Diurno</td>
                                                </tr>
                                                <tr>
                                                    <td>10829786675</td>
                                                    <td>Francisco Javier</td>
                                                    <td>Miranda Lopéz</td>
                                                    <td>77</td>
                                                    <td>TZT 232</td>
                                                    <td>Conductor Diurno</td>
                                                </tr>
                                                <tr>
                                                    <td>10829786675</td>
                                                    <td>Francisco Javier</td>
                                                    <td>Miranda Lopéz</td>
                                                    <td>77</td>
                                                    <td>TZT 232</td>
                                                    <td>Conductor Diurno</td>
                                                </tr>
                                                <tr>
                                                    <td>10829786675</td>
                                                    <td>Francisco Javier</td>
                                                    <td>Miranda Lopéz</td>
                                                    <td>77</td>
                                                    <td>TZT 232</td>
                                                    <td>Conductor Diurno</td>
                                                </tr>
                                                <tr>
                                                    <td>10829786675</td>
                                                    <td>Francisco Javier</td>
                                                    <td>Miranda Lopéz</td>
                                                    <td>77</td>
                                                    <td>TZT 232</td>
                                                    <td>Conductor Diurno</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </section>
                                </section>
                            </div>
                        </section>
                    </form>
                    
                    <section class="comision__espera">
                        <section class="espera__titulo espera__titulo--comision">
                            <i class="opcion__icono fa-solid fa-check-to-slot"></i>
                            <h2 class="titulo__espera"> Comisiones Efectivas</h2>
                        </section>  

                        <form id="frm-example" name="frm-example"  class="espera__tabla espera__tabla--recaudo" action="#" method="get">
                            
                            <div class="contenedor__btngeneral">
                                <button type="submit" class="btngeneral"><i class="icono__btn fa-regular fa-file-lines"></i> Generar Factura</button>
                            </div> 

                            <table id="example" class="display nowrap"  style="width:100%">
                                <thead class="thead__black">
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Extn.</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot class="tfoot__black">
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th>Total a pagar: </th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- <p>
                                <b>Filas Seleccionadas:</b><br>
                                <pre id="example-console-rows"></pre>
                            </p>
                            <p>
                                <b>Informacion enviada al servidor:</b><br>
                                <pre id="example-console-form"></pre>
                            </p> -->
                        </form>
                    </section>
                </section>


            </section>
        </section>
<?php include_once("../../layout/footer-app.inc.php");?>
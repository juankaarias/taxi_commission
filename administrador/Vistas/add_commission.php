<?php include_once("../../layout/header-app.inc.php");?>

    <section class="commission__add">
        <section class="add__contenedor">
            <section class="contenedor__add">
                <i class="add__icono fa-solid fa-circle-plus"></i>
                <p class="add__titulo">Nueva Comision</p>
            </section>
            <section class="contenedor__comision">
                <form action="" method="post" class="comision__contenedor">

                    <section class="contenedor__comisionista">
                        <section class="comisionista__cabecera">
                            <h2 class="cebecera__titulo">Comisionista</h2>
                            <section class="cabecera__linea">
                                <hr class="linea__cabecera">
                            </section>
                        </section>
                        <section class="comisionista__inputs">
                            <section class="inputs__group">
                                <label class="group__label" for="">Id. Comisionista</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="">Nombres</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="">Estado</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="">Fecha y Hora</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for=""># de Comision</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group inputs__group--destino">
                                <label class="group__label group__label--destino" for="">Posible Destino</label>
                                <input class="group__input group__input--destino" type="text">
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
                                <label class="group__label" for="">Cod. Vehiculo</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="">Nombres</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="">Id Conductor</label>
                                <input class="group__input" type="text">
                            </section>
                            
                            <section class="inputs__group">
                                <label class="group__label" for="">Estado</label>
                                <input class="group__input" type="text">
                            </section>
                            <section class="inputs__group">
                                <label class="group__label" for="">Turno</label>
                                <input class="group__input" type="text">
                            </section>
                        </section>
                    </section>

                    <section class="contenedor__submit">
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>                           
                        <input class="submit__agregar" type="submit" value="Agregar">
                        <section class="submit__linea">
                            <hr class="linea__submit">
                        </section>
                    </section>
                </form> 
            </section>
     
            <section class="comision__espera">
                <section class="espera__titulo">
                    <h2 class="titulo__espera">Comisiones Pendientes</h2>
                </section>

                <section class="tablas__datos">
                    <table id="example4" class="display" cellspacing="0" cellpadding="3" width="100%" style="width: 0px;">
                        <thead>
                            <tr>
                                <th>Fecha y Hora</th>
                                <th># Comision</th>
                                <th>Comisionista</th>
                                <th>Conductor</th>
                                <th>Operador</th>
                                <th>Turno</th>
                                <th>Destino Posible</th>
                                <th>Estado</th>
                                <th>Finalizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2011-04-25</td>
                                <td>40</td>
                                <td>Tiger Nixon</td>
                                <td>Architect</td>
                                <td>Sebastian</td>
                                <td>CD</td>
                                <td>Areopuerto</td>
                                <td>Revision</td>
                                <td><i class="fa-solid fa-pen-to-square"></i></td>
                            </tr>
                            <tr>
                                <td>2011-04-25</td>
                                <td>40</td>
                                <td>Tiger Nixon</td>
                                <td>Architect</td>
                                <td>Sebastian</td>
                                <td>CD</td>
                                <td>Areopuerto</td>
                                <td>Revision</td>
                                <td><i class="fa-solid fa-pen-to-square"></i></td>
                            </tr>
                            <tr>
                                <td>2011-04-25</td>
                                <td>40</td>
                                <td>Tiger Nixon</td>
                                <td>Architect</td>
                                <td>Sebastian</td>
                                <td>CD</td>
                                <td>Areopuerto</td>
                                <td>Revision</td>
                                <td><i class="fa-solid fa-pen-to-square"></i></td>
                            </tr>
                            <tr>
                                <td>2011-04-25</td>
                                <td>40</td>
                                <td>Tiger Nixon</td>
                                <td>Architect</td>
                                <td>Sebastian</td>
                                <td>CD</td>
                                <td>Areopuerto</td>
                                <td>Revision</td>
                                <td><i class="fa-solid fa-pen-to-square"></i></td>
                            </tr>
                                    
                        </tbody>
                    </table>
                </section>
   
            </section>    

        </section>
    </section>

<?php include_once("../../layout/footer-app.inc.php");?>
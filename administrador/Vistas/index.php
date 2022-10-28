<?php 
    $titulo="Inicio - Sistema de Comisiones";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__body">
        <section class="body__contenedor">
            <div class="contenedor__grafica">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            <div class="contenedor__grafica">
                <canvas id="myCharts" width="400" height="400"></canvas>
            </div>
            <div class="contenedor__grafica">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
            
            <!--
            <section class="contenedor__tablas">
                <section class="tablas__titulo">
                    <i class="titulo__icono fa-solid fa-check-double"></i>
                    <h1 class="titulo__tabla">Aprobación Comisionista</h1>
                </section>
                <section class="tablas__datos">
                   
                    <table id="aprobacion" class="display nowrap"  style="width:100%">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Nombres</th>
                                <th>Email</th>
                                <th>Nombre Punto</th>
                                <th>Acción</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Rafael Andres</td>
                                <td>randres@hotmail.com</td>
                                <td>Edificio Santa Marta</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Rafael Andres</td>
                                <td>randres@hotmail.com</td>
                                <td>Edificio Santa Marta</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Rafael Andres</td>
                                <td>randres@hotmail.com</td>
                                <td>Edificio Santa Marta</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Rafael Andres</td>
                                <td>randres@hotmail.com</td>
                                <td>Edificio Santa Marta</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                                                      
                        </tbody>
                    </table>

                </section>
                <section class="tablas__entrar">
                    <p class="entrar__mas">Ver Más</p>
                    <i class="entrar__icono fa-solid fa-circle-chevron-down"></i>
                </section>
            </section>
            
            <section class="contenedor__tablas">
                <section class="tablas__titulo">
                    <i class="titulo__icono fa-solid fa-file-invoice-dollar"></i> 
                    <h1 class="titulo__tabla">Solicitudes de Pago</h1>
                </section>
                <section class="tablas__datos">
                    <table id="pago" class="display nowrap"  style="width:100%">
                        <thead>
                            <tr>
                                <th>Fecha y Hora</th>
                                <th>Nombre</th>
                                <th>Valor</th>
                                <th>Destino</th>
                                <th># Radicado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02/09/2022 12:25:34 p.m.</td>
                                <td>Jose Luis</td>
                                <td>$150.000</td>
                                <td>Efectivo</td>
                                <td>4621</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022 12:25:34 p.m.</td>
                                <td>Jose Luis</td>
                                <td>$150.000</td>
                                <td>Efectivo</td>
                                <td>4621</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022 12:25:34 p.m.</td>
                                <td>Jose Luis</td>
                                <td>$150.000</td>
                                <td>Efectivo</td>
                                <td>4621</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022 12:25:34 p.m.</td>
                                <td>Jose Luis</td>
                                <td>$150.000</td>
                                <td>Efectivo</td>
                                <td>4621</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                                                        
                        </tbody>
                    </table>
                </section>
                <section class="tablas__entrar">
                    <p class="entrar__mas">Ver Más</p>
                    <i class="entrar__icono fa-solid fa-circle-chevron-down"></i>
                </section>
            </section>

            <section class="contenedor__tablas">
                <section class="tablas__titulo">
                    <i class="titulo__icono fa-solid fa-hourglass-start"></i>
                    <h1 class="titulo__tabla">Plazo Máximo de Pago</h1>
                </section>
                <section class="tablas__datos">
                <table id="cobrar" class="display nowrap"  style="width:100%">
                        <thead>
                            <tr>
                                <th>Días Transc.</th>
                                <th>Conductor</th>
                                <th>Deuda</th>
                                <th># Comisiones</th>
                                <th>Notificación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Carlos Alberto</td>
                                <td>$25.000</td>
                                <td>15</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Carlos Alberto</td>
                                <td>$25.000</td>
                                <td>15</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Carlos Alberto</td>
                                <td>$25.000</td>
                                <td>15</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Carlos Alberto</td>
                                <td>$25.000</td>
                                <td>15</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                                
                            </tr>                            
                        </tbody>
                    </table>
                </section>
                <section class="tablas__entrar">
                    <p class="entrar__mas">Ver Más</p>
                    <i class="entrar__icono fa-solid fa-circle-chevron-down"></i>
                </section>
            </section>

            <section class="contenedor__tablas">
                <section class="tablas__titulo">
                    <i class="titulo__icono fa-solid fa-chalkboard-user"></i>
                    <h1 class="titulo__tabla">Quejas y Peticiones</h1>
                </section>
                <section class="tablas__datos">
                <table id="queja" class="display nowrap"  style="width:100%">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Tipo Usuario</th>
                                <th>Nombres</th>
                                <th>Tipo Solicitud</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Conductor</td>
                                <td>Luis Esteban</td>
                                <td>Petición</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Conductor</td>
                                <td>Luis Esteban</td>
                                <td>Petición</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Conductor</td>
                                <td>Luis Esteban</td>
                                <td>Petición</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>02/09/2022</td>
                                <td>Conductor</td>
                                <td>Luis Esteban</td>
                                <td>Petición</td>
                                <td>
                                    <a class="tabla__btn" href="#">
                                        <p>Ver</p>
                                        <i class="opcion__icono fa-solid fa-right-to-bracket"></i> 
                                    </a>
                                </td>
                            </tr>                            
                        </tbody>
                    </table>
                </section>
                <section class="tablas__entrar">
                    <p class="entrar__mas">Ver Más</p>
                    <i class="entrar__icono fa-solid fa-circle-chevron-down"></i>
                </section>
            </section>-->

        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>

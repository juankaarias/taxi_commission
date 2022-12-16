<?php
    $titulo="Comisiones Efectivas";
    include_once("../../layout/header-app.inc.php");
    require_once('../modelo/administrador.php');
   $modeloAdmin = new Admnistrador();
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Comisiones / Comisiones Efectivas</p>
        </div>
        <div class="indicador__main">
            <p class="main__titulo">Comisiones Efectivas</p>
        </div>
    </section>
    <section class="effective__commissions">

        <section class="commissions__container">

            <section class="container__effective">
                <i class="effective__icono fa-solid fa-circle-check"></i>
                <h2 class="effective__titulo">Comisiones Efectivas</h2>
            </section>
            
            <section class="container__datos">
                <section class="container__fecha">
                    <section class="fecha__busqueda">
                        <form action="../controlador/commission_effective.php" method="POST" class="busqueda__fecha">
                            <p for="fecha_de" class="fecha__label">De</p>
                            <input type="date" class="fecha__input" name="fecha_de" id="fecha_de">
                            <p for="fecha_a" class="fecha__label">Hasta</p>
                            <input type="date" name="fecha_a" class="fecha__input" id="fecha_a">                  
                            <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-magnifying-glass"></i> Buscar</button>
                            <a href="commissions_effective.php" class="btngeneral btngeneral--cancelar">
                                <p class="cancelar__btn"><i class="icono__btn fa-solid fa-trash"></i> Limpiar</p>     
                            </a>
                        </form>
                    </section>
                </section>
                <table id="efectivas" class="display nowrap"  style="width:100%">
                    <thead class="thead__black">
                        <tr>
                            <th>Fecha y Hora</th>
                            <th># Comisión</th>
                            <th>Operador</th>
                            <th>Comisionista</th>
                            <th>Conductor</th>
                            <th>Destino Posible</th>
                            <th>Destino Final</th>
                            <th>Tipo Comisión</th>
                            <th>Observacion</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $comisEfect = $modeloAdmin->getComisionesEfectivas();
                            if($comisEfect != null){
                                foreach ($comisEfect as $comEfectiva) {                           
                        ?>
                        <tr>
                            <td><?php echo $comEfectiva['FechaHora']?></td>
                            <td><?php echo $comEfectiva['Comisión']?></td>
                            <td><?php echo $comEfectiva['Operador']?></td>
                            <td><?php echo $comEfectiva['Comisionista']?></td>
                            <td><?php echo $comEfectiva['Conductor']?></td>
                            <td><?php echo $comEfectiva['DestinoPosible']?></td>
                            <td><?php echo $comEfectiva['DestinoFinal']?></td>
                            <td><?php echo $comEfectiva['TipoComisión']?></td>
                            <td><?php echo $comEfectiva['Observación']?></td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_effective.php">
                                    
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>

            </section>
        </section>
    </section>        
<?php include_once("../../layout/footer-app.inc.php");?>
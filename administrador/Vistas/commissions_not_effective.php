<?php
    $titulo="Comisiones No Efectivas";    
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Comisiones / Comisiones No Efectivas</p>
        </div>
        <div class="indicador__main">
            <p class="main__titulo">Comisiones no efectivas</p>
        </div>
    </section>    
    <section class="effective__commissions">
        <section class="commissions__container">
            <section class="container__effective">
                <i class="effective__icono fa-sharp fa-solid fa-circle-xmark"></i>
                <h2 class="effective__titulo">Comisiones No Efectivas</h2>
            </section>
            <section class="container__datos">
                <section class="container__fecha">
                    <section class="fecha__busqueda">
                        <form action="#" method="POST" class="busqueda__fecha">
                            <p for="fecha_de" class="fecha__label">De</p>
                            <input type="date" class="fecha__input" name="fecha_de" id="fecha_de" value="<?php echo $fecha_de; ?>" required>
                            <p for="fecha_a" class="fecha__label">Hasta</p>
                            <input type="date" name="fecha_a" class="fecha__input" id="fecha_a" value="<?php echo $fecha_a; ?>" required>                  
                            <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-magnifying-glass"></i> Buscar</button>
                            <a href="commissions_not_effective.php" class="btngeneral btngeneral--cancelar">
                                <p class="cancelar__btn"><i class="icono__btn fa-solid fa-trash"></i> Limpiar</p>     
                            </a>
                        </form>
                    </section>
                </section>
                <table id="noefectivas" class="display nowrap"  style="width:100%">
                    <thead class="thead__black">
                        <tr>
                            <th>Fecha y Hora</th>
                            <th># Comisión</th>
                            <th>Operador</th>
                            <th>Comisionista</th>
                            <th>Conductor</th>
                            <th>Destino Posible</th>
                            <th>Observacion</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                         <?php
                            $comisNoEfect = $modeloAdmin->getComisionesNoEfectivas();
                            if($comisNoEfect != null){
                                foreach ($comisNoEfect as $comNoEfectiva) {                           
                        ?>
                        <tr>
                            <td><?php echo $comNoEfectiva['FechaHora']?></td>
                            <td><?php echo $comNoEfectiva['Comisión']?></td>
                            <td><?php echo $comNoEfectiva['Operador']?></td>
                            <td><?php echo $comNoEfectiva['Comisionista']?></td>
                            <td><?php echo $comNoEfectiva['Conductor']?></td>
                            <td><?php echo $comNoEfectiva['DestinoPosible']?></td>
                            <td><?php echo $comNoEfectiva['Observación']?></td>
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
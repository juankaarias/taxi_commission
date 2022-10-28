<?php 
    $titulo="Comisiones No Efectivas";    
    include_once("../../layout/header-app.inc.php");
?>
    
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
                            <th>Turno</th>
                            <th>Destino Posible</th>
                            <th>Estado Comisión</th>
                            <th>Observacion</th>
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
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2021/12/10 02:58:11 p.m.</td>
                            <td>1</td>
                            <td>Maryoris </td>
                            <td>Francisco</td>
                            <td>Alexander</td>
                            <td>CN</td>
                            <td>Centro</td>
                            <td>Anulada</td>
                            <td>No espero el servicio</td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_commission_not_effective.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>   
                    </tbody>
                </table>

            </section>
        </section>
    </section>        
<?php include_once("../../layout/footer-app.inc.php");?>
<?php 
    $titulo="Comisiones No Efectivas";    
    include_once("../../layout/header-app.inc.php");
?>
    
    <main class="effective__commissions">
        <section class="commissions__container">
            <section class="container__effective container__effective--noefectivas">
                <i class="effective__icono fa-sharp fa-solid fa-circle-xmark"></i>
                <h2 class="effective__titulo">Comisiones No Efectivas</h2>
            </section>
            <section class="container__datos">
                <section class="container__fecha">
                    <section class="fecha__busqueda">
                        <h2 class="busqueda__titulo">Busqueda por fecha: </h2>
                        <form action="#" method="POST" class="busqueda__fecha">
                            <label for="fecha_de" class="fecha__label">De</label>
                            <input type="date" class="fecha__input" name="fecha_de" id="fecha_de" value="<?php echo $fecha_de; ?>" required>
                            <label for="fecha_a" class="fecha__label">Hasta</label>
                            <input type="date" name="fecha_a" class="fecha__input" id="fecha_a" value="<?php echo $fecha_a; ?>" required>
                            <input type="submit" value="Buscar" class="fecha__submit">
                            <a href="commissions_not_effective.php" class="fecha__reset" >
                                <i class="opcion__icono fa-regular fa-trash-can"></i> 
                                <p>Borrar</p> 
                            </a>
                        </form>
                    </section>
                </section>
                <table id="noefectivas" class="display nowrap"  style="width:100%">
                    <thead>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
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
                                <a class="tabla__btn tabla__btn--editar" href="#">
                                    <i class="opcion__icono fa-solid fa-pen-clip"></i>
                                    <p>Editar</p>
                                </a>
                            </td>
                        </tr>   
                    </tbody>
                </table>

            </section>
        </section>
                
<?php include_once("../../layout/footer-app.inc.php");?>
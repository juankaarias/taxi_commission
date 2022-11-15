<?php
    $titulo="Nueva Comisión";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Comisiones / Asignar Comisión</p>
        </div>
    </section>
    <section class="commission__add"> 
        <section class="add__contenedor">

            <section class="contenedor__add">
                <i class="add__icono fa-solid fa-circle-plus"></i>
                <p class="add__titulo">Asignar Comisión</p>
            </section>
            
            <section class="contenedor__comision">
                <form action="#" method="post">
                    <div class="comision__contenedor">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Seleccionar Comisionista</h2>
                            </div>
                            <div class="comisionista__inputs">
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input input__search">
                                    <a href="#" class="btn__asignarcomisionista">
                                        <i class="fa-solid fa-user-plus"></i>
                                    </a>
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
                                    <input required="" type="text" name="text" autocomplete="off" class="input input__large">
                                    <i class="icono__input fa-solid fa-street-view"></i>
                                    <label class="user-label">Posible destino del pasajero</label>
                                </div>
                            </div>
                        </div>
                        <section class="asignarcomisionista__modal">
                            <div class="modal__contenedor">
                                <section class="comision__espera">
                                    <section class="espera__titulo espera__titulo--comisionista">
                                        <div class="titulo__cabecera">
                                            <i class="opcion__icono fa-solid fa-person-dots-from-line"></i>
                                            <h2 class="titulo__espera">Seleccionar Comisionista</h2>
                                        </div>
                                        <a href="#" class="asignarcomisionista__cerrar" title="Cerrar Ventana">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                        </a>
                                    </section>
                                    <form action="#" method="post">
                                        <section class="espera__tabla espera__tabla--modal ">
                                            <table id="modalasignarcomisionista" class="display nowrap"  style="width:100%">
                                                <thead class="thead__black">
                                                    <tr>
                                                        <th>Identificación</th>
                                                        <th>Nombres</th>
                                                        <th>Apellidos</th>
                                                        <th>Nombre Punto</th>
                                                        <th>Dirección Punto</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>10829786675</td>
                                                        <td>Francisco Javier</td>
                                                        <td>Miranda Lopéz</td>
                                                        <td>Sol Hotel Inn</td>
                                                        <td>Cra. 1c #20-23</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10829786675</td>
                                                        <td>Maryoris Paola</td>
                                                        <td>Rodriguez Polo</td>
                                                        <td>Park Hotel</td>
                                                        <td>Cra. 1 # 18 - 67</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10829786675</td>
                                                        <td>Maryoris Paola</td>
                                                        <td>Rodriguez Polo</td>
                                                        <td>Park Hotel</td>
                                                        <td>Cra. 1 # 18 - 67</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10829786675</td>
                                                        <td>Maryoris Paola</td>
                                                        <td>Rodriguez Polo</td>
                                                        <td>Park Hotel</td>
                                                        <td>Cra. 1 # 18 - 67</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10829786675</td>
                                                        <td>Maryoris Paola</td>
                                                        <td>Rodriguez Polo</td>
                                                        <td>Park Hotel</td>
                                                        <td>Cra. 1 # 18 - 67</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10829786675</td>
                                                        <td>Maryoris Paola</td>
                                                        <td>Rodriguez Polo</td>
                                                        <td>Park Hotel</td>
                                                        <td>Cra. 1 # 18 - 67</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </section>
                                        <div class="contenedor__submit contenedor__submit--modal">                          
                                            <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-plus"></i> Agregar</button>
                                            <a href="add_commission.php" class="btngeneral btngeneral--cancelar">
                                                <p class="cancelar__btn"><i class="icono__btn fa-solid fa-ban"></i> Cancelar</p>     
                                            </a>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </section>
                    </div> 
                    <div class="comision__contenedor comision__contenedor--debajo">
                        <div class="contenedor__comisionista">
                            <div class="comisionista__cabecera">
                                <h2 class="cabecera__titulo">Seleccionar Conductor</h2>
                            </div>
                            <div class="comisionista__inputs">
                                <div class="input-group">
                                    <input required="" type="text" name="text" autocomplete="off" disabled class="input input__search">
                                    <a href="#" class="btn__asignarconductor">
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
                        <section class="asignarconductor__modal">
                            <div class="modal__contenedor">
                                <section class="comision__espera">
                                    <section class="espera__titulo espera__titulo--comisionista">
                                        <div class="titulo__cabecera">
                                            <i class="opcion__icono fa-solid fa-taxi"></i>
                                            <h2 class="titulo__espera">Seleccionar Conductor</h2>
                                        </div>
                                        <a href="#" class="asignarconductor__cerrar" title="Cerrar Ventana">
                                            <i class="fa-regular fa-circle-xmark"></i>
                                        </a>
                                    </section>
                                    <form action="#" method="post">
                                        <section class="espera__tabla espera__tabla--modal">
                                            <table id="modal__asignarconductor" class="display nowrap"  style="width:100%">
                                                <thead class="thead__black">
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
                                                        <td>10829123675</td>
                                                        <td>Francisco Javier</td>
                                                        <td>Miranda Lopéz</td>
                                                        <td>77</td>
                                                        <td>TZT 232</td>
                                                        <td>Conductor Diurno</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10829780975</td>
                                                        <td>Francisco Javier</td>
                                                        <td>Miranda Lopéz</td>
                                                        <td>78</td>
                                                        <td>TZT 232</td>
                                                        <td>Conductor Diurno</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10829886675</td>
                                                        <td>Francisco Javier</td>
                                                        <td>Miranda Lopéz</td>
                                                        <td>77</td>
                                                        <td>TZT 232</td>
                                                        <td>Conductor Diurno</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10800786675</td>
                                                        <td>Francisco Javier</td>
                                                        <td>Miranda Lopéz</td>
                                                        <td>78</td>
                                                        <td>TZT 232</td>
                                                        <td>Conductor Diurno</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10824486675</td>
                                                        <td>Francisco Javier</td>
                                                        <td>Miranda Lopéz</td>
                                                        <td>79</td>
                                                        <td>TZT 232</td>
                                                        <td>Conductor Diurno</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10845786675</td>
                                                        <td>Francisco Javier</td>
                                                        <td>Miranda Lopéz</td>
                                                        <td>75</td>
                                                        <td>TZT 232</td>
                                                        <td>Conductor Diurno</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </section>
                                        <div class="contenedor__submit contenedor__submit--modal">                          
                                            <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-plus"></i> Agregar</button>
                                            <a href="add_commission.php" class="btngeneral btngeneral--cancelar">
                                                <p class="cancelar__btn"><i class="icono__btn fa-solid fa-ban"></i> Cancelar</p>   
                                            </a>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </section>
                    </div>
                </form>

                <section class="comision__espera">
                    <section class="espera__titulo espera__titulo--comision">
                        <i class="opcion__icono fa-regular fa-clock"></i>
                        <h2 class="titulo__espera">Comisiones Pendientes</h2>
                    </section>

                    <section class="espera__tabla">
                        <table id="pendientes" class="display nowrap"  style="width:100%">
                            <thead class="thead__black">
                                <tr>
                                    <th>Fecha y Hora</th>
                                    <th># Comisión</th>
                                    <th>Operador</th>
                                    <th>Comisionista</th>
                                    <th>Conductor</th>
                                    <th>Destino Posible</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris Paola</td>
                                    <td>Francisco Javier</td>
                                    <td>Luis Alexander</td>
                                    <td>Parque de los novios</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="edit_commission_pendiente.php">
                                                <p class="btn__tabla">Editar</p>
                                                
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Finalizar" href="add_finish_commission.php">
                                                <p class="btn__tabla">Finalizar</p>    
                                                
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/11 03:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris Paola</td>
                                    <td>Francisco Javier</td>
                                    <td>Luis Alexander</td>
                                    <td>Parque de los novios</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="edit_commission_pendiente.php">
                                                <p class="btn__tabla">Editar</p>
                                                
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Finalizar" href="add_finish_commission.php">
                                                <p class="btn__tabla">Finalizar</p>    
                                                
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris Paola</td>
                                    <td>Francisco Javier</td>
                                    <td>Luis Alexander</td>
                                    <td>Parque de los novios</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="edit_commission_pendiente.php">
                                                <p class="btn__tabla">Editar</p>
                                                
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Finalizar" href="add_finish_commission.php">
                                                <p class="btn__tabla">Finalizar</p>    
                                                
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris Paola</td>
                                    <td>Francisco Javier</td>
                                    <td>Luis Alexander</td>
                                    <td>Parque de los novios</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="edit_commission_pendiente.php">
                                                <p class="btn__tabla">Editar</p>
                                                
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Finalizar" href="add_finish_commission.php">
                                                <p class="btn__tabla">Finalizar</p>    
                                                
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris Paola</td>
                                    <td>Francisco Javier</td>
                                    <td>Luis Alexander</td>
                                    <td>Parque de los novios</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="edit_commission_pendiente.php">
                                                <p class="btn__tabla">Editar</p>
                                                
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Finalizar" href="add_finish_commission.php">
                                                <p class="btn__tabla">Finalizar</p>    
                                                
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2021/12/10 02:58:11 p.m.</td>
                                    <td>1</td>
                                    <td>Maryoris Paola</td>
                                    <td>Francisco Javier</td>
                                    <td>Luis Alexander</td>
                                    <td>Parque de los novios</td>
                                    <td>Pendiente</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="edit_commission_pendiente.php">
                                                <p class="btn__tabla">Editar</p>
                                                
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Finalizar" href="add_finish_commission.php">
                                                <p class="btn__tabla">Finalizar</p>    
                                                
                                            </a>
                                        </div>
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
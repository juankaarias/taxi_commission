<?php
    $titulo="Tipo de Comisión";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Comisiones / Tipo de Comisión</p>
        </div>
    </section>
    <section class="nuevo__tipocomision">
        <section class="tipocomision__nuevo">
            <section class="nuevo__indicador">
                <i class="indicador__icon fa-solid fa-list-ol"></i>
                <p class="indicador__tipocomision">Tipo de Comisión</p>
            </section>
            <section class="nuevo__tipo"> 
                <form action="#" method="POST" class="tipo__formulario">
                    <div class="formulario__subcontainer">
                        <div class="subcontainer__cabecera">
                            <h2 class="cabecera__titulo">Crear nuevo tipo de comisión</h2>
                        </div>
                        <div class="comisionista__inputs">
                            
                            <div class="input-group">
                                <input required="" type="text" name="text" autocomplete="off" class="input">
                                <i class="icono__input fa-solid fa-file-invoice-dollar"></i>
                                <label class="user-label">Nombre Comisión</label>
                            </div>
                            <div class="input-group">
                                <input required="" type="text" name="text" autocomplete="off"  class="input input__large">
                                <i class="icono__input fa-solid fa-circle-info"></i>
                                <label class="user-label">Detalle del tipo de comisión</label>
                            </div>
                            <div class="input-group">
                                <input required="" type="text" name="text" autocomplete="off"  class="input">
                                <i class="icono__input fa-solid fa-dollar-sign"></i>
                                <label class="user-label">Valor Comisión</label>
                            </div>
                            
                            <!-- <div class="input-group">
                                <select name="text" id="" class="input" autocomplete="off">
                                    <option selected="true" disabled="disabled">Estado Comisión</option>
                                    <option value="">Activo</option>
                                    <option value="">Inactivo</option>
                                </select>
                                <i class="icono__input fa-solid fa-toggle-off"></i> 
                            </div> -->
                        </div>
                        <div class="contenedor__submit">                          
                            <button type="submit" class="btngeneral btngeneral--buscar"><i class="icono__btn fa-solid fa-plus"></i> Agregar</button>
                            <a href="add_type_commission.php" class="btngeneral btngeneral--cancelar">
                                <p class="cancelar__btn"><i class="icono__btn fa-solid fa-trash"></i> Limpiar</p>   
                            </a>
                        </div>
                    </div>
                </form>
                <section class="tipo__listacomision">
                    <section class="espera__titulo espera__titulo--comision">
                        <i class="opcion__icono fa-regular fa-clock"></i>
                        <h2 class="titulo__espera">Lista tipo de Comisiones</h2>
                    </section>
                    <section class="espera__tabla">
                        <table id="tipocomisiones" class="display nowrap"  style="width:100%">
                            <thead class="thead__black">
                                <tr>
                                    <th>Id Comisión</th>
                                    <th>Nombre Comisión</th>
                                    <th>Detalle</th>
                                    <th>Valor Comisión</th>
                                    <th>Ultima Modificación</th> 
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Areopuerto</td>
                                    <td>Comprende de bombazuca areopuerto</td>
                                    <td>5000</td>
                                    <td>2022/10/18</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="#">
                                                <p class="btn__tabla">Editar</p>
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Eliminar" href="#">
                                                <p class="btn__tabla">Eliminar</p>    
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Urbana</td>
                                    <td>Comprende Rodadero y Santa Marta</td>
                                    <td>3000</td>
                                    <td>2022/05/28</td>
                                    <td>
                                        <div class="botones__tabla">
                                            <a class="tabla__btn tabla__btn--editar" title="Editar" href="#">
                                                <p class="btn__tabla">Editar</p>
                                                
                                            </a>
                                            <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Eliminar" href="#">
                                                <p class="btn__tabla">Eliminar</p>    
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </section>
                



            </section>
            <!-- <div class="nuevo__listado">
                <div class="nuevo__indicador">
                    <i class="indicador__icon fa-solid fa-list-ol"></i>
                    <p class="indicador__tipocomision">Listado de tipos de comisiones</p>
                </div>
                <div class="nuevo__listatipocomision">
                    <table id="tipocomision" class="display nowrap"  style="width:100%">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Nombre</th>
                                <th>Valor</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Urbana</td>
                                <td>3000</td>
                                <td>
                                    <div class="botones__tabla">
                                        <a class="tabla__btn tabla__btn--tipocomisionedit" title="Editar" href="edit_type_commission.php">
                                            <p class="btn__tabla">Editar</p>     
                                        </a>
                                        <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Eliminar" href="#">
                                            <p class="btn__tabla">Eliminar</p>         
                                        </a>
                                    </div>
                                </td>
                            </tr>  
                            <tr>
                                <td>2</td>
                                <td>Urbana</td>
                                <td>3000</td>
                                <td>
                                    <div class="botones__tabla">
                                        <a class="tabla__btn tabla__btn--tipocomisionedit" title="Editar" href="edit_type_commission.php">
                                            <p class="btn__tabla">Editar</p>     
                                        </a>
                                        <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Eliminar" href="#">
                                            <p class="btn__tabla">Eliminar</p>         
                                        </a>
                                    </div>
                                </td>
                            </tr> 
                            <tr>
                                <td>3</td>
                                <td>Urbana</td>
                                <td>3000</td>
                                <td>
                                    <div class="botones__tabla">
                                        <a class="tabla__btn tabla__btn--tipocomisionedit" title="Editar" href="edit_type_commission.php">
                                            <p class="btn__tabla">Editar</p>     
                                        </a>
                                        <a class="tabla__btn tabla__btn--tipocomisiondelete" title="Eliminar" href="#">
                                            <p class="btn__tabla">Eliminar</p>         
                                        </a>
                                    </div>
                                </td>
                            </tr>                        
                        </tbody>
                    </table>
                </div>

            </div> -->
            
        </section>
    </section>


    

            
        






<?php include_once("../../layout/footer-app.inc.php");?>
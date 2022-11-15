<?php
    $titulo="Centro de ayuda - Comisiones";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Ayuda / Centro de ayuda</p>
        </div>
    </section>
    <section class="contenedor__help">
        <section class="help__subcontenedor">
            <section class="contenedor__add">
                <i class="opcion__iconomenu fa-regular fa-circle-question"></i>
                <p class="add__titulo">Centro de ayuda</p>
            </section>


            <div class="subcontenedor__info">

                <aside class="info__aside">
                    <h2 class="aside__titulo">Consultar temas de ayuda</h2>
                    
                    <div class="aside__contenedor">
                        <div class="contenedor__aside">
                            <ul class="aside__lista" >
                            <li class="lista__aside"><a  class="aside__link" href="help_comisiones.php"> Comisiones</a></li>
                                <li class="lista__aside"><a  class="aside__link" href="help_cartera.php"> Cartera</a></li>
                                <li class="lista__aside"><a  class="aside__link" href="help_reportes.php"> Reportes</a></li>
                                <li class="lista__aside"><a  class="aside__link" href="help_usuarios.php"> Usuarios</a></li>
                                <li class="lista__aside"><a  class="aside__link" href="help_configuracion.php"> Configuración</a></li>
                                <li class="lista__aside"><a  class="aside__link" href="help_usuario.php"> Usuario Logueado</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>

                <section class="info__temas">
                    <div class="info__header">
                        <div class="header__fondo">
                            <img class="fondo__logo" src="../../images/logo.png" title="Logotipo Taxi Rodadero Bello Horizonte">
                        </div>
                        <div class="header__help">
                            <h1 class="help__titulo">Preguntas Frecuentes / Comisiones</h1>
                            <p></p>
                        </div>
                    </div>
                    
                    <section class="temas__acordeon" >
                        <div class="acordeon">
                            <div class="bloque">   
                                <i class="bloque__icon fa-solid fa-plus"></i>
                                <p class="p"><i class="opcion__iconomenu fa-solid fa-plus"></i> Asignar Comisiones</p>
                                <p class="contenido__titulo"><br>¿CÓMO ASIGNAR UNA COMISIÓN?</p>
                                <p class="contenido"><br>
                                    1. En el menu Principal, seleccione la opción <span class="negrita">Comisiones</span>,
                                    <img class="images__xl" src="../../images/menu_principal.jpg" alt="Asignar comision" loading="lazy"> 2. Seleccione la
                                    opcion <span class="negrita">Asignar Comisión</span>. <img class="images__ayuda" src="../../images/asignar_comision.jpg" alt="Asignar comision" loading="lazy">
                                    3. Para seleccionar el comisionista de clic en el siguiente boton y seleccione de la lista al comisionista deseado, 
                                    de la misma manera seleccione al conductor y de clic en <span class="negrita">Agregar</span>, la comisión quedara en <span class="negrita">Comisiones Pendientes</span>, hasta que el conductor confirme, una vez este confirme el servicio, entonces se procederá a finalizar la comisión.<img class="images__ayuda" src="../../images/asignar_personas.jpg" alt="Asignar comision" loading="lazy">
                                    4. Para finalizar la comisión clic en el boton <span class="negrita">Finalizar</span>
                                    <img class="images__xl" src="../../images/finalizar_comision.jpg" alt="Asignar comision" loading="lazy">
                                    5. Seleccione el <span class="negrita">Estado de comisión</span> y diligencie los campos faltantes para guardar la comisión.
                                    <img class="images__xl" src="../../images/cerrar_comision.jpg" alt="Asignar comision" loading="lazy">
                                    Dar clic en el boton <span class="negrita">Finalizar,</span> se guardará con exito la comisión en <span class="negrita">Comisiones Efectivas</span> y ya no se reflejara más en <span class="negrita">Comisiones Pendientes.</span>
                                </p>
                                
                                <p class="contenido__titulo"><br>¿CÓMO EDITAR UNA COMISÓN PENDIENTE?</p>
                                <p class="contenido"><br>
                                    1. En el menu Principal, seleccione la opción <span class="negrita">Comisiones</span>.
                                    <img class="images__xl" src="../../images/menu_principal.jpg" alt="Asignar comision" loading="lazy"> 2. Seleccione la
                                    opcion <span class="negrita">Asignar Comisión</span>. <img class="images__ayuda" src="../../images/asignar_comision.jpg" alt="Asignar comision" loading="lazy">
                                
                                    3. En la tabla de <span class="negrita">Comisiones Pendientes</span> selecciona el boton <span class="negrita">Editar</span>
                                    <img class="images__xl" src="../../images/editar_pendiente.jpg" alt="Asignar comision" loading="lazy">
                                    4. Modifica la información de la <span class="negrita">Comisión Pendiente</span>
                                    <img class="images__xl" src="../../images/editar_datos.jpg" alt="Asignar comision" loading="lazy">
                                    Dar clic en el boton <span class="negrita">Guardar</span>.
                                </p>
                            </div>
                            <div class="bloque">
                                <i class="bloque__icon fa-solid fa-plus"></i>
                                <p class="p"><i class="opcion__iconomenu fa-solid fa-file-circle-check"></i> Comisiones Efectivas</p>
                                <p class="contenido">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque explicabo dolorum velit delectus consequatur voluptates ipsum pariatur magnam ab, et rerum alias quidem. Eos placeat similique, sint laboriosam maxime eius.</p>
                                <p class="contenido">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque explicabo dolorum velit delectus consequatur voluptates ipsum pariatur magnam ab, et rerum alias quidem. Eos placeat similique, sint laboriosam maxime eius.</p>
                            </div>
                            <div class="bloque">
                                <i class="bloque__icon fa-solid fa-plus"></i>
                                <p class="p"><i class="opcion__iconomenu fa-solid fa-file-circle-xmark"></i> Comisiones No Efectivas</p>
                                <p class="contenido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eaque sed nam! Dignissimos doloremque sint unde voluptatem ab quia ratione, excepturi temporibus consequatur vel harum! Unde qui dolor vel amet.</p>
                            </div>
                            <div class="bloque">
                                <i class="bloque__icon fa-solid fa-plus"></i>
                                <p class="p"><i class="opcion__iconomenu fa-solid fa-list-ol"></i> Tipo de Comisiones</p>
                                <p class="contenido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ut explicabo consequuntur earum doloremque consectetur similique, beatae reprehenderit perferendis corporis eius eligendi totam adipisci, mollitia facere vero numquam deserunt eum!</p>
                            
                            </div>
                        </div>
                    </section>
                </section>
            
            </div>

        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>
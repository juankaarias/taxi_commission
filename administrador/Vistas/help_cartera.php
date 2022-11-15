<?php
    $titulo="Centro de ayuda - Cartera";
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
                            <h1 class="help__titulo">Preguntas Frecuentes / Cartera</h1>
                            <p></p>
                        </div>
                    </div>
                    
                    <section class="temas__acordeon" >
                        <div class="acordeon">
                            <div class="bloque">   
                                <i class="bloque__icon fa-solid fa-plus"></i>
                                <p class="p"><i class="opcion__iconomenu fa-solid fa-cash-register"></i> Recaudo</p>
                                <p class="contenido">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia magnam, explicabo libero eaque provident adipisci similique laudantium ea reprehenderit vitae quo autem odio deserunt ut dolor eius? Magnam, dolore est.</p>
                            </div>
                            <div class="bloque">
                                <i class="bloque__icon fa-solid fa-plus"></i>
                                <p class="p"><i class="opcion__iconomenu fa-solid fa-money-bill-1-wave"></i> Pago Comisiones</p>
                                <p class="contenido">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque explicabo dolorum velit delectus consequatur voluptates ipsum pariatur magnam ab, et rerum alias quidem. Eos placeat similique, sint laboriosam maxime eius.</p>
                            </div>
                            <div class="bloque">
                                <i class="bloque__icon fa-solid fa-plus"></i>
                                <p class="p"><i class="opcion__iconomenu fa-solid fa-vault"></i> Estado de Cartera</p>
                                <p class="contenido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eaque sed nam! Dignissimos doloremque sint unde voluptatem ab quia ratione, excepturi temporibus consequatur vel harum! Unde qui dolor vel amet.</p>
                            </div>
                        </div>
                    </section>
                </section>
            
            </div>

        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>
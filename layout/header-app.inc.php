<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="author" content="taxi rodadero bello horizonte">
    <meta name="description" content="Estación Taxi Rodadero Bello Horizonte conductores profesionales al volante cra 4 #11a-119, 057 Santa Marta, Magdalena, Colombia.">
    <meta name="keywords" content="taxi, taxi rodadero, comisiones, Taxis en Santa Marta">
    <link rel="icon" type="image/x-icon" href="../../images/taxi-icon.png">
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/jquery.dataTables.min.css">
    <title>Admin - Sistema de Comisiones</title>
</head>
<body>
    <main class="main__commission">
        <header class="commission__cabecera">
            <section class="cabecera__navegacion">
                <section class="navegacion__logotipo">
                    <section class="logotipo__contenedor">
                        <img  class="contenedor__logo" src="../../images/logo.png" alt="Logo empresa">
                    </section>
                    <section class="logotipo__titulos">
                        <section class="titulos__empresa">TAXI RODADERO</section>
                        <section class="titulos__sucursal">BELLO HORIZONTE S.A.S</section>
                    </section>
                </section>
                <nav class="navegacion__menu">
                    <ul class="menu__unordered">
                        <li class="unordered__lista">
                            <section href="#" class="lista__link">
                                <i class="link__icono link__icono--notificacion fa-solid fa-bell"></i>
                                <p class="link__texto">Notificaciones</p>
                                <i class="link__icono fa-solid fa-angles-down"></i>
                            </section>
                            <ul class="lista__submenu">
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Aprobacion Comisionista</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Solicitud de Pago</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Quejas y Peticiones</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Plazo de Pago</a>
                                </li>
                            </ul>
                        </li>
                        <li class="unordered__lista">
                            <section class="lista__link">
                                <p class="link__texto">Ayuda&#63;</p>
                                <i class="link__icono fa-solid fa-angles-down"></i>
                            </section>
                            <ul class="lista__submenu">
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Centro de ayuda</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Manual de Usuario</a>
                                </li>
                            </ul>
                        </li>
                        <li class="unordered__lista">
                            <section class="lista__link">
                                <p class="link__texto">usuario</p>
                                <i class="link__icono fa-solid fa-angles-down"></i>
                            </section>
                            <ul class="lista__submenu">
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Perfil</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Cambiar Contraseña</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Cerrar Sesion</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </section>   
        </header>
        <section class="commission__menu">
            <section class="menu__contenedor">
                <section class="contenedor__indicativo">
                    <section class="indicativo__titulo">
                        <p class="titulo__modulo">Modulo Administrador</p>
                    </section>
                    <section class="indicativo__fecha">
                        <p class="fecha__ingreso">Su última visita fue: Viernes 19 de Agosto 2022 10:39 a.m.</p>
                    </section>
                </section>
                <section class="contenedor__menu">
                    <nav class="menu__navegacion">
                        <ul class="navegacion__item">
                            <li class="item__lista">
                                <a href="index.php" class="lista__opcion">
                                    <i class="opcion__icono fa-solid fa-house-chimney"></i>
                                    <p class="opcion__texto">Inicio</p>
                                </a>
                            </li>
                            <li class="item__lista">
                                <section class="lista__opcion">
                                    <i class="opcion__icono fa-solid fa-circle-plus"></i>
                                    <p class="opcion__texto">Comisiones</p>
                                </section>
                                <ul class="lista__subopcion">
                                    <li class="subopcion__item">
                                        <a href="add_commission.php" class="item__submenu">Nueva Comision</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Comisiones Efectivas</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Comisiones No Efectivas</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item__lista">
                                <section class="lista__opcion">
                                    <i class="opcion__icono fa-solid fa-file-lines"></i>
                                    <p class="opcion__texto">Reportes</p>
                                </section>
                                <ul class="lista__subopcion">
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Comisionista</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Conductor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item__lista">
                                <section class="lista__opcion">
                                    <i class="opcion__icono fa-solid fa-wallet"></i>
                                    <p class="opcion__texto">Cartera</p>
                                </section>
                                <ul class="lista__subopcion">
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Recaudo</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Pago Comision</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Estado Cartera</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Cuadre de Caja</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item__lista">
                                <section class="lista__opcion">
                                    <i class="opcion__icono fa-solid fa-users"></i>
                                    <p class="opcion__texto">Usuarios</p>
                                </section>
                                <ul class="lista__subopcion">
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Nuevo Usuario</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Consultar Usuario</a>
                                    </li>
                                    <li class="subopcion__item">
                                        <a href="#" class="item__submenu">Aprobar Usuario</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </section>
            </section>
        </section>




        
    
   
    
    
    







    
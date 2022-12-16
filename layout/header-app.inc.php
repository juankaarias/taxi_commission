<?php
    require_once("../../usuarios/modelo/usuarios.php");
    require_once("../modelo/administrador.php");
    $modeloUsuarios = new Usuarios();
    $modeloAdmin = new Admnistrador();
    $modeloUsuarios->validarSesionAdministrador();
?>
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
    <link rel="stylesheet" type="text/css" href="../../css/app.css">
    <link rel="stylesheet" type="text/css" href="../../css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/responsive.dataTables.min.css">
    <!-- <script src="//cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script> -->
    <title><?php echo $titulo;?></title>   
    <link rel="stylesheet" type="text/css" href="../../css/cdn.datatables.net.v.dt.dt-1.10.12.se-1.2.0.datatables.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/jquery-datatables.1.2.7.css-checkboxes.dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="../../css/jquery-datatables-checkboxes.1.2.12.cssdataTables.checkboxes.css">
</head>
<body>
    <main class="main__commission">
        <header class="commission__cabecera">
            <section class="cabecera__navegacion">
                <div class="navegacion__logotipo">
                    <div class="logotipo__contenedor">
                        <img class="contenedor__logo" src="../../images/logo.png" alt="Logo empresa" loading="lazy" title="Taxi Rodadero Bello Horizonte">
                    </div>
                    <div class="logotipo__titulos">
                        <section class="titulos__empresa">Sistema de Comisiones</section>
                        <section class="titulos__sucursal">Módulo Administrador</section>
                    </div>
                </div>
                <nav class="navegacion__menu">
                    <ul class="menu__unordered">
                        <!-- <li class="unordered__lista">
                            <section href="#" class="lista__link">
                                <i class="link__icono link__icono--notificacion fa-solid fa-bell"></i>
                                <p class="link__texto">Notificaciones</p>
                                <i class="link__icono fa-solid fa-angles-down"></i>
                            </section>
                            <ul class="lista__submenu">
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="#">Aprobación Comisionista</a>
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
                        </li> -->
                        <li class="unordered__lista">
                            <section class="lista__link">
                                <p class="link__texto">Ayuda&#63;</p>
                                <i class="link__icono fa-solid fa-angles-down"></i>
                            </section>
                            <ul class="lista__submenu">
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="help_comisiones.php"><i class="opcion__iconomenu fa-regular fa-circle-question"></i> Centro de ayuda</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="user_manual.php" target="_blank"><i class="opcion__iconomenu fa-solid fa-book"></i> Manual de Usuario</a>
                                </li>
                            </ul>
                        </li>
                        <li class="unordered__lista">
                            <section class="lista__link">
                                <p class="link__texto"><?php echo $modeloUsuarios->getNombre();?></p>
                                <i class="link__icono fa-solid fa-angles-down"></i>
                            </section>
                            <ul class="lista__submenu">
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="perfil.php"><i class="opcion__iconomenu fa-regular fa-address-card"></i> Perfil Usuario</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="edit_password.php"><i class="opcion__iconomenu fa-solid fa-key"></i> Cambiar Contraseña</a>
                                </li>
                                <li class="submenu__link">
                                    <a  class="link__ayuda" href="../../usuarios/controlador/logout.php"><i class="opcion__iconomenu fa-solid fa-power-off"></i> Cerrar Sesión</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </section>
            <section class="cabecera__menu">
                <section class="menu__contenedor">
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
                                    <a href="#" class="lista__opcion">
                                        <i class="opcion__icono fa-solid fa-circle-plus"></i>
                                        <p class="opcion__texto">Comisiones</p>
                                    </a>
                                    <ul class="lista__subopcion">
                                        <li class="subopcion__item">
                                            <a href="add_commission.php" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-plus"></i> Asignar Comisión</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="commissions_effective.php" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-file-circle-check"></i> Comisiones Efectivas</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="commissions_not_effective.php" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-file-circle-xmark"></i> Comisiones No Efectivas</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="add_type_commission.php" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-list-ol"></i> Tipo de Comisión</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item__lista">
                                    <div class="lista__opcion">
                                        <i class="opcion__icono fa-solid fa-wallet"></i>
                                        <p class="opcion__texto">Cartera</p>
                                    </div>
                                    <ul class="lista__subopcion">
                                        <li class="subopcion__item">
                                            <a href="recaudo.php" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-cash-register"></i> Recaudo</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="#" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-money-bill-1-wave"></i> Pago Comisión</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="#" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-vault"></i> Estado Cartera</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item__lista">
                                    <div class="lista__opcion">
                                        <i class="opcion__icono fa-solid fa-chart-line"></i>
                                        <p class="opcion__texto">Reportes</p>
                                    </div>
                                    <ul class="lista__subopcion">
                                        <li class="subopcion__item">
                                            <a href="#" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-person-dots-from-line"></i> Comisionista</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="#" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-taxi"></i> Conductor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item__lista">
                                    <div class="lista__opcion">
                                        <i class="opcion__icono fa-solid fa-users"></i>
                                        <p class="opcion__texto">Usuarios</p>
                                    </div>
                                    <ul class="lista__subopcion">
                                        <li class="subopcion__item">
                                            <a href="add_user.php" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-user-plus"></i> Crear Usuario</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="list_user.php" class="item__submenu"><i class="opcion__iconomenu fa-solid fa-address-book"></i> Consultar Usuario</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item__lista">
                                    <div class="lista__opcion">
                                        <i class="fa-solid fa-gears"></i>
                                        <p class="opcion__texto">Configuración</p>
                                    </div>
                                    <ul class="lista__subopcion lista__subopcion--submenu">

                                        <!-- <li class="subopcion__item">
                                            <div class="item__submenu item__submenu--comision">
                                                <p class="comision__menu">otros</p>
                                                <i class="fa-solid fa-angle-right"></i>
                                            </div>
                                            <ul class="item__submenu2">
                                                <li class="submenu2__lista"><a  class="lista__comision" href="#">otros</a></li>
                                                <li class="submenu2__lista"><a  class="lista__comision" href="#">otros</a></li>
                                            </ul>
                                        </li> -->

                                        <li class="subopcion__item subopcion__item--backup">
                                            <div class="item__submenu item__submenu--backup">
                                                <p class="comision__menu"><i class="opcion__iconomenu fa-solid fa-database"></i> Copia de Seguridad</p>
                                                <i class="fa-solid fa-angle-right"></i>
                                            </div>
                                            <ul class="item__submenu2">
                                                <li class="submenu2__lista"><a  class="lista__respaldo" href="backup.php"><i class="opcion__iconomenu fa-solid fa-download"></i> Crear Respaldo</a></li>
                                                <li class="submenu2__lista"><a  class="lista__respaldo" href="restore.php"><i class="opcion__iconomenu fa-solid fa-upload"></i> Resturar Respaldo</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </section>
            </section> 
             
        </header>
        




        
    
   
    
    
    







    
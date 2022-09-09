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
    <link rel="stylesheet" href="../../css/responsive.dataTables.min.css">
    <title><?php echo $titulo;?></title>
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
                        <li class="unordered__lista">
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
                                    <a  class="link__ayuda" href="#">Cerrar Sesión</a>
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
                                            <a href="add_commission.php" class="item__submenu">Nueva Comisión</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="commissions_effective.php" class="item__submenu">Comisiones Efectivas</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="commissions_not_effective.php" class="item__submenu">Comisiones No Efectivas</a>
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
                                            <a href="#" class="item__submenu">Recaudo</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="#" class="item__submenu">Pago Comisión</a>
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
                                    <div class="lista__opcion">
                                        <i class="opcion__icono fa-solid fa-file-lines"></i>
                                        <p class="opcion__texto">Reportes</p>
                                    </div>
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
                                    <div class="lista__opcion">
                                        <i class="opcion__icono fa-solid fa-users"></i>
                                        <p class="opcion__texto">Usuarios</p>
                                    </div>
                                    <ul class="lista__subopcion">
                                        <li class="subopcion__item">
                                            <a href="#" class="item__submenu">Crear Usuario</a>
                                        </li>
                                        <li class="subopcion__item">
                                            <a href="#" class="item__submenu">Editar Usuario</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="item__lista">
                                    <div class="lista__opcion">
                                        <i class="fa-solid fa-gears"></i>
                                        <p class="opcion__texto">Configuración</p>
                                    </div>
                                    <ul class="lista__subopcion lista__subopcion--submenu">

                                        <li class="subopcion__item">
                                            <div class="item__submenu item__submenu--comision">
                                                <p class="comision__menu">Tipo de Comisión</p>
                                                <i class="fa-solid fa-angle-right"></i>
                                            </div>
                                            <ul class="item__submenu2">
                                                <li class="submenu2__lista"><a  class="" href="#">Crear tipo de Comisión</a></li>
                                                <li class="submenu2__lista"><a  class="" href="#">Editar tipo de Comisión</a></li>
                                            </ul>
                                        </li>

                                        <li class="subopcion__item subopcion__item--backup">
                                            <div class="item__submenu item__submenu--backup">
                                                <p class="comision__menu">Copia de Seguridad</p>
                                                <i class="fa-solid fa-angle-right"></i>
                                            </div>
                                            <ul class="item__submenu2">
                                                <li class="submenu2__lista"><a  class="lista__respaldo" href="backup.php">Crear Respaldo</a></li>
                                                <li class="submenu2__lista"><a  class="lista__respaldo" href="restore.php">Resturar Respaldo</a></li>
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
        




        
    
   
    
    
    







    
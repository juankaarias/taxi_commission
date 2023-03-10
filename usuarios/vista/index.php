<?php
    require_once('../modelo/usuarios.php');
    $modeloUsuarios = new Usuarios();
    if(isset($_SESSION['messageErrors'])){
        $errors = $_SESSION['messageErrors'];
    }
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
    <link rel="stylesheet" href="../../css/usuarios.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <title>Iniciar Sesión - Sistema de Comisiones</title>
</head>
<body class="body">
    <main class="main__login">

        <header class="login__header">
            <nav class="header__navegacion">
                <a href="#" class="navegacion__opcion" title="Ayuda">
                    <p class="opcion__texto">Ayuda</p>
                    <i class="opcion__icono fa-solid fa-circle-question"></i>
                </a> 
                <a href="../../index.php" class="navegacion__opcion" title="Salir">
                    <p class="opcion__texto ">Salir</p>
                    <i class="opcion__icono opcion__icono--salir fa-solid fa-circle-xmark"></i>
                </a>  
            </nav> 
            <section class="header__logo">
                <section class="logo__trbh">
                    <img src="../../images/logo.png" alt="Logo" class="trbh__logo">
                </section>
                <section class="logo__titulo">
                    <h1 class="titulo__h1">TAXI RODADERO</h1>
                    <h3 class="titulo__h3">BELLO HORIZONTE S.A.S </h3>
                </section>
            </section> 
        </header> 
        <section class="login__formulario">

            <section class="formulario__login">

                <form action="../controlador/login.php" method="POST" class="login__form">
                    <section class="form__icono">
                        <p class="icono__text">SISTEMA DE COMISIONES</p>
                        <p class="icono__text">INICIAR SESIÓN</p>
                        <?php if (isset($errors)): ?>
                            <div class="alert alert-status">
                                <?php echo $modeloUsuarios->showError($errors, 'status_error');?>
                            </div>
                        <?php endif;?>
                    </section>
                    <section class="form__group">
                        <label class="group__label" for="email">Correo Electrónico</label>
                        <section class="group__input">
                            <i class="input__icono fa-solid fa-envelope"></i>   
                            <input class="input__general" type="email" name="email" id="email"  autocomplete="off" value="">
                        </section>
                        <?php 
                            if(isset($errors)){ 
                        ?>
                            <?php echo "<i class='text__alert fa-solid fa-circle-xmark'></i> ".$modeloUsuarios->showError($errors, 'email');?>
                        <?php    
                            }
                        ?>
                    </section>
                    <section class="form__group">
                        <label class="group__label" for="password">Contraseña</label>
                        <section class="group__input">
                            <i class="input__icono fa-solid fa-lock"></i>   
                            <input class="input__general" type="password" name="password" id="password"  autocomplete="off">
                        </section>
                        <?php 
                            if(isset($errors)){ 
                        ?>
                            <?php echo "<i class='text__alert fa-solid fa-circle-xmark'></i> ".$modeloUsuarios->showError($errors, 'password');?>
                        <?php    
                            }
                        ?>
                    </section>

                    <section class="form__preguntas">

                        <!-- <section class="preguntas__checkbox">
                            <input  class="checkbox__recordar" type="checkbox" name="recordarUsuario" value="recordarUsuario" id="recordarUsuario">
                            <label  class="checkbox__texto"  for="recordarUsuario">Recordar usuario</label>
                        </section>   -->             
                        <section class="preguntas__olvido">
                            <a href="recover.php" class="olvido__password">¿Olvido su contraseña?</a>
                        </section>
                    </section>
                    <section class="form__submit">
                        <input type="submit" value="Iniciar Sesión" class="btn__general">
                    </section>
                </form>
                <?php
                    $modeloUsuarios->clearErrors();
                ?>
            </section>
        </section>
        <section class="login__registro">
            <section class="registro__login">

                <h4 class="login__link">¿Deseas ser Comisionista?</h4>
            </section>
            <section class="registro__login">
                <a href="register.php"  class="login__link--clic">Registrate aquí</a>
            </section>
        </section>
    </main>
    <footer class="login__footer">
        <p class="footer__login">&copy; 2022 Taxi Rodadero Bello Horizonte S.A.S - Todos los derechos reservados</p>
    </footer>
</body>
</html>

<?php
    if(isset($_GET['token']) && isset($_GET['id'])){
        if(!empty($_GET['token']) && !empty($_GET['id'])){ 
            $email = $_GET['id'];
            $token = $_GET['token'];    
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
                <title>Restablecer Contraseña</title>
            </head>
            <body class="body">
                
                <main class="main__recover">
                    <nav class="header__navegacion">
                        <a href="#" class="navegacion__opcion" title="Ayuda">
                            <p class="opcion__texto">Ayuda</p>
                            <i class="opcion__icono fa-solid fa-circle-question"></i>
                        </a> 
                        <a href="index.php" class="navegacion__opcion" title="Salir">
                            <p class="opcion__texto ">Salir</p>
                            <i class="opcion__icono opcion__icono--salir fa-solid fa-circle-xmark"></i>
                        </a>  
                    </nav> 
                    <header class="recover__header">
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
                    <section class="recover__formulario">
                        <section class="formulario__recover">               
                            <section class="recover__titulo">
                                <p class="titulo__recover">¡Restablecer contraseña!</p>
                                <p class="titulo__recover titulo__recover--subtitulo">Ingresa la nueva contraseña aquí.</p>
                            </section>
                            <div id="message"></div>
                            <!-- action="../controlador/controlador_new_password.php" method="post" -->
                            <form id="frm__newPass"  class="recover__form">
                                <input type="hidden" name="email" id="email" value="<?php echo $email ?>">
                                <input type="hidden" name="token" id="token" value="<?php echo $token ?>">
                                <section class="form__recover">
                                    <label class="recover__label" for="password">Nueva contraseña</label>
                                    <section class="recover__input"> 
                                        <i class="input__icono fa-solid fa-lock"></i> 
                                        <input class="input__correo" type="password" name="password" id="password" autocomplete="off" >
                                    </section>
                                    <div id="err__password" class="err__message"></div>
                                </section>

                                <section class="form__recover">
                                    <label class="recover__label" for="password2">Confirmar contraseña</label>
                                    <section class="recover__input"> 
                                        <i class="input__icono fa-solid fa-lock"></i> 
                                        <input class="input__correo" type="password" name="password2" id="password2" autocomplete="off" >
                                    </section>
                                    <div id="err__password2" class="err__message"></div>
                                </section>

                                <section class="form__recover--btn">
                                    <a href="recover.php" value="regresar" class=""><i class="fa-solid fa-arrow-left-long"></i> Regresar</a>
                                    <input type="submit" value="Recuperar" class="btn__general">
                                </section>
                            </form>
                        </section>
                    </section>       
                    
                </main>
                <footer class="recover__footer">
                    <p class="footer__recover">&copy; 2022 Taxi Rodadero Bello Horizonte S.A.S - Todos los derechos reservados</p>
                </footer>
                
                <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="../../js/sweetalert2@11.js"></script>
                <script src="../../js/new_password.js"></script>
                
            </body>
            </html>
    <?php 
        }else{ 
            header('Location: index.php');
        }    
    ?>
<?php 
    }else{
        header('Location: index.php');
    } 
?>


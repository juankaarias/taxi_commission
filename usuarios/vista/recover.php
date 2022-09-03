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
    <title>Recuperar Contraseña</title>
</head>
<body>
    <main class="main__recover">
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
                    <p class="titulo__recover">¡Recuperación de la contraseña!</p>
                    <p class="titulo__recover titulo__recover--subtitulo">Ingresa tu email para recuperar la contraseña.</p>
                </section>
                <form action="#" method="POST" class="recover__form">
                    <!--email recover-->
                    <section class="form__recover">
                        <label class="recover__label" for="correo">Correo Electrónico</label>
                        <section class="recover__input">
                            <i class="input__icono fa-solid fa-envelope"></i>  
                            <input class="input__correo" type="email" name="correo" id="correo" autocomplete="off" required>
                        </section>
                        <p class="group__error">El nombre de usuario debe ser texto.</p>
                    </section>
                    <section class="form__recover">
                        <input type="submit" value="Recuperar" class="btn__general">
                    </section>
                </form>
            </section>
        </section>       
        <footer class="recover__footer">
            <p class="footer__recover">&copy; 2022 Taxi Rodadero Bello Horizonte S.A.S - Todos los derechos reservados</p>
        </footer>
    </main>
</body>
</html>
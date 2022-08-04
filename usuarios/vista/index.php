<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="taxi rodadero bello horizonte">
    <meta name="description" content="Estación Taxi Rodadero Bello Horizonte conductores profesionales al volante cra 4 #11a-119, 057 Santa Marta, Magdalena, Colombia.">
    <meta name="keywords" content="taxi, taxi rodadero, comisiones, Taxis en Santa Marta">
    <link rel="icon" type="image/x-icon"  href="../../images/taxi.png">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <title>Sistema de Comisiones</title>
</head>
<body>
    <header class="header__section--exit">
        <a href="../../index.php" class="header__a--text" title="Salir">
            <i class="header__icon--exit fa-solid 
            fa-person-walking-dashed-line-arrow-right"></i> 
        </a> 
    </header>
    <section class="section__login--logo">
        <section class="section__section--contenedorimg">
            <img src="../../images/logo.png" alt="Logo" class="section__img--login">
        </section>
        <section class="section__section--containertitlelogo">
            <h1 class="section__h1--titulologin">TAXI RODADERO</h1>
            <h3 class="section__h3--subtitulologin">BELLO HORIZONTE S.A.S </h3>
        </section>
    </section>     
    <main class="main__login">
        <section class="main__login--contenedor">


            <form action="../controlador/login.php" method="POST">
                <section class="main__login--contenedoricono">
                    <i class="main__login--icono fa-solid fa-user-lock"></i>
                </section>
                <!--nombre usuario-->
                <section class="main__section--grupologin">
                    <label class="main__label" for="usuario">Usuario</label>
                    <section class="main__contenedorinput">
                        <i class="main__loginicono fa-solid fa-user"></i>   
                        <input class="main__input--form" type="text" name="usuario" autocomplete="off" required>
                    </section>
                    <p class="main__error">El nombre de usuario debe ser texto.</p>
                </section>
                <!--Contraseña usuario-->
                <section class="main__section--grupologin">
                    <label class="main__label" for="password">Contraseña</label>
                    <section class="main__contenedorinput">
                        <i class="main__loginicono fa-solid fa-lock"></i>
                        <input class="main__input--form" type="password" name="password" autocomplete="off" required>
                    </section>
                    <p class="main__error">La contraseña debe ser numerica.</p>
                </section> 

                <section>
                    <section>
                        <input type="checkbox" name="recordarUsuario" value="recordarUsuario" id="recordarUsuario">
                        <label for="recordarUsuario">Recuerdame</label>
                    </section>
                    <section>
                        <a href="#">¿Olvido su contraseña?</a>
                    </section>
                </section>
                <input type="submit" value="Iniciar Sesion">
            </form>



        </section>
        
        <h4>¿Deseas ser comisionista?</h4>
        <h4>Registrate aqui</h4>
        <br> 
        <section class="main__section--ayuda">
            <p class="p__ayuda"><a href="#">Necesitas ayuda <i class="fa-solid fa-circle-question"></i></a></p>
        </section> 
    </main>
    <footer class="footer__login">
        <p class="footer__p">&copy; 2022 Taxi Rodadero Bello Horizonte S.A.S - Todos los derechos reservados</p>
    </footer>
</body>
</html>
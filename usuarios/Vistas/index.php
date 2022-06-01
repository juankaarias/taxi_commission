<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon"  href="images/taxi.png">
    <link rel="stylesheet" href="../../css/app.css">
    <title>Sistema de Comisiones</title>
</head>
<body>
    <section class="section_main">
        
        
        <h1>TAXI RODADERO</h1>
        <h3>BELLO HORIZONTE S.A.S</h3>
        <form action="usuarios/Controladores/login.php" method="POST">
            <label for="usuario">Usuario</label>
            <br>
            <input type="text" name="usuario" autocomplete="off" required>
            <br>
            <label for="password">Contraseña</label>
            <br>
            <input type="password" name="password" autocomplete="off" required>
            <br>
            <input type="checkbox" name="recordarUsuario" value="recordarUsuario" id="recordarUsuario">
            <label for="recordarUsuario">Recuerdame</label>
            <a href="#">¿Olvido su contraseña?</a>
            <br>
            <input type="submit" value="Iniciar Sesion">
        </form>
        <h4>¿Deseas ser comisionista?</h4>
        <h4>Registrate aqui</h4>
        <br>
        <section>
            <p class="p__ayuda">¿Necesitas ayuda?</p>
        </section> 
        <footer class="footer__container">
            <p class="footer__text">&copy; 2022 Taxi Rodadero Bello Horizonte S.A.S Todos los derechos reservados</p>
        </footer>

    </section>
</body>
</html>
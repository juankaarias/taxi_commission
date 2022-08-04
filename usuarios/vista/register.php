<?php include_once("../../layout/header-user.inc.php");?>

<main class="main__register">
    <section class="register__indicador">
        <section class="indicador__contenedor">
            <a href="index.php" class="link__home">Inicio</a>
            <p class="contenedor__link">Registrate</p>
        </section>
    </section>

    <section class="register__inicio">
        <section class="inicio__register">
            <section class="register__contactanos">
                <h1 class="contactanos__title">Registrate</h1>
                <p class="contactanos__texto">¡Se parte de nuestra familia!</p>
            </section> 
        </section>
    </section>

    <section class="contacto__contacto">
        <section class="contacto__formulario">

            <section class="formulario__titulo">
                <h2 class="titulo__formulario">Registro de Comisionista</h2>
                <hr class="fomulario__barra fomulario__barra--register">
            </section>
            <section class="formulario__condicion">
                <p class="condicion__formulario">
                    Podran ser comisionistas quienes soliciten un gran 
                    flujo de servicios al dia ejemplo hoteles, agencias, 
                    conjuntos, edificios etc, ingresa tus datos personales y 
                    del punto de donde se generan los servicios, previa validacion
                    podras realizar servicios e inmediatemante 
                    comenzar a comisionar con nosotros. 
                </p>
            </section>
            <form class="contenedor__form" action="" method="post">
                <section class="form__form">

                    <section class="form__input">
                        <label class="label__text" for="name" >Nombres</label>
                        <input class="input__box" type="text" name="name" placeholder="Nombres" id="name" autocomplete="off" requred>
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="">Apellidos</label>
                        <input class="input__box" type="text" placeholder="Apellidos">
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="">Email</label>
                        <input class="input__box" type="text" placeholder="Correo Electronico">
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="">Telefono</label>
                        <input class="input__box" type="text" placeholder="Telefono">
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="input__box">Tipo de Identificacion</label>
                        <input class="input__box" type="text" placeholder="Seleccione"> 
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="input__box">Numero de Identificacion</label>
                        <input class="input__box" type="text" placeholder="Numero de Id"> 
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="input__box">Fecha de Nacimiento</label>
                        <input class="input__box" type="text" placeholder="Fecha de nacimiento"> 
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="input__box">Contraseña</label>
                        <input class="input__box" type="text" placeholder="Contraseña"> 
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="input__box">Nombre del Punto</label>
                        <input class="input__box" type="text" placeholder="Nombre del Punto"> 
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="input__box">Direccion del Punto</label>
                        <input class="input__box" type="text" placeholder="Direccion"> 
                    </section>   

                </section>
                <section class="form__submit">
                    <input class="submit__boton" type="submit" value="Registrar">
                </section>
                
            </form>
            
        </section>
    </section>





<?php include_once("../../layout/footer-user.inc.php");?>
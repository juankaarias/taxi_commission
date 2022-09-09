<?php 
    $titulo="Contactanos";
    include_once("layout/header.inc.php");
?>
<main class="main__contacto">
    <section class="contacto__indicador">
        <section class="indicador__contenedor">
            <a href="index.php" class="link__home">Inicio</a>
            <p class="contenedor__link">Contáctanos</p>
        </section>
    </section>
    <section class="contacto__inicio">
        <section class="inicio__contacto">
            <section class="contacto__contactanos">
                <h1 class="contactanos__title">Contáctanos</h1>
                <p class="contactanos__texto">¡Ponte en contacto con nosotros!</p>
            </section> 
        </section>
    </section>
    <section class="contacto__contacto">
        <section class="contacto__formulario">
            <section class="formulario__titulo">
                <h2 class="titulo__formulario">Formulario de atención al cliente</h2>
                <hr class="fomulario__barra">
            </section>
            <form class="contenedor__form" action="" method="POST">
                <section class="form__form">
                    <section class="form__input">
                        <label class="label__text" for="nombre">Nombres</label>
                        <input class="input__box" type="text" name="nombre" id="nombre" autocomplete="off" required >
                    </section>
                    <section class="form__input">
                        <label class="label__text" for="apellidos">Apellidos</label>
                        <input class="input__box" type="text" name="apellidos" id="apellidos" autocomplete="off" required >
                    </section>
                    <section class="form__input">
                        <label class="label__text" for="correo">Email</label>
                        <input class="input__box" type="email" name="correo" id="correo" autocomplete="off" required>
                    </section>
                    <section class="form__input">
                        <label class="label__text" for="">Teléfono</label>
                        <input class="input__box" type="text" autocomplete="off" required>
                    </section>
                    <section class="form__input">
                        <label class="label__text" for="input__box">Dirección</label>
                        <input class="input__box" type="text" autocomplete="off" required> 
                    </section>
                    <section class="form__input">
                        <label class="label__text" for="input__box">Asunto</label>
                        <input class="input__box" type="text" autocomplete="off" required> 
                    </section>
                    <section class="form__input form__input--textarea">
                        <label class="label__text" for="">Observación</label>
                        <textarea class="input__box input__box--textarea"  name="" id="" autocomplete="off" required></textarea>
                    </section>
                    <p class="form__aclaracion">Los campos con el <span class="aclaracion__campo">*</span> son obligatorios.</p>
                </section>
                <section class="form__submit">
                    <input class="submit__boton" type="submit" value="Enviar">
                </section>
            </form>  
        </section>
    </section>
    <section class="contacto__datos">
        <section class="contacto__contenedor">
            <iframe  class="contenedor__mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.108079829543!2d-74.2291712364608!3d11.201752501989194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef45f171281bd19%3A0xa7578e1e40c688c5!2staxi%20rodadero%20bellohorizonte!5e0!3m2!1ses!2sco!4v1656527053181!5m2!1ses!2sco" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </section>  
<?php include_once("layout/footer.inc.php");?>
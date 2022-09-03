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
                        <label class="label__text" for="input__box">Dirección</label>
                        <input class="input__box" type="text" placeholder="Direccion"> 
                    </section>

                    <section class="form__input">
                        <label class="label__text" for="input__box">Asunto</label>
                        <input class="input__box" type="text" placeholder="Asunto"> 
                    </section>

                    <section class="form__input form__input--textarea">
                        <label class="label__text" for="">Observación</label>
                        <textarea class="input__box input__box--textarea" placeholder="Cuéntanos brevemente tu solicitud" name="" id=""></textarea>
                    </section>
                </section>
                <section class="form__submit">
                    <input class="submit__boton" type="submit" value="Enviar">
                </section>
                
            </form>
            
        </section>
    </section>

    <section class="contacto__datos">
        <section class="datos__contacto">

            <section class="contacto__bloque">
                <section class="bloque__figura">
                    <section class="figura__icono">
                        <i class="icono__numeros fa-solid fa-phone"></i>
                    </section>
                </section>
                <section class="bloque__texto">
                    <p class="texto__titulo">Principal</p>
                </section>
                <section class="bloque__numeros">
                    <p class="numeros__fijos">&#40;605&#41; 422 58 30 &#45; &#40;605&#41; 422 72 55</p>
                </section>
            </section>
            
            <section class="contacto__bloque">
                <section class="bloque__figura">
                    <section class="figura__icono">
                        <i class="icono__numeros fa-solid fa-phone"></i>
                    </section>
                </section>
                <section class="bloque__texto">
                    <p class="texto__titulo">Sucursal</p>
                </section>
                <section class="bloque__numeros">
                    <p class="numeros__fijos">&#40;605&#41; 432 16 00 &#45; &#40;605&#41; 432 29 00</p>
                </section>
            </section>

            <section class="contacto__bloque">
                <section class="bloque__figura">
                    <section class="figura__icono">
                        <i class="icono__numeros fa-solid fa-mobile-screen-button"></i>
                    </section>
                </section>
                <section class="bloque__texto">
                    <p class="texto__titulo">Celulares</p>
                </section>
                <section class="bloque__numeros">
                    <p class="numeros__fijos">310 635 03 12 &#45; 317 849 36 36</p>
                </section>
            </section>

            <section class="contacto__bloque">
                <section class="bloque__figura">
                    <section class="figura__icono">
                        <i class="icono__numeros fa-solid fa-envelope"></i>
                    </section>
                </section>
                <section class="bloque__texto">
                    <p class="texto__titulo">Correo Electrónico</p>
                </section>
                <section class="bloque__numeros">
                    <p class="numeros__fijos">estaciontaxirodadero@hotmail.com</p>
                </section>
            </section>
        </section>
    </section>

    <section class="contacto__contenedor">
        <iframe  class="contenedor__mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3291.108079829543!2d-74.2291712364608!3d11.201752501989194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef45f171281bd19%3A0xa7578e1e40c688c5!2staxi%20rodadero%20bellohorizonte!5e0!3m2!1ses!2sco!4v1656527053181!5m2!1ses!2sco" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    
       
<?php include_once("layout/footer.inc.php");?>
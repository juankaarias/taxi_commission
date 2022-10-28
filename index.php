<?php 
    $titulo="Inicio";
    include_once("layout/header.inc.php");
?>

<main class="main">

    <section class="main__slider">
        <ul class="slider__ul">

            <li class="ul__slider ul__slider--1">
                <section class="slider__difuminado">
                    <p class="difuminado__texto">¡Bienvenidos a Taxi Rodadero Bello Horizonte!</p>
                    <section class="difuminado__btn">
                        <a href="tel:+573106350312" class="btn__general">Llamanos</a>
                    </section>
                </section>
            </li>

            <li class="ul__slider ul__slider--2">
                <section class="slider__difuminado">
                    <p class="difuminado__texto">¡Taxi Rodadero te acompaña a tu próximo destino!</p>
                    <section class="difuminado__btn">
                        <a href="tel:+573178493636" class="btn__general">Llamanos</a>
                    </section>
                </section>
            </li>

            <li class="ul__slider ul__slider--3">
                <section class="slider__difuminado">
                    <p class="difuminado__texto">¡Servicio Disponible 24/7!</p>
                    <section class="difuminado__btn">
                        <a href="contact_us.php" class="btn__general">Contactanos</a>
                    </section>
                </section>
            </li>

            <li class="ul__slider ul__slider--4">
                <section class="slider__difuminado">
                    <p class="difuminado__texto">¡Para todos tus planes, somos tu mejor aliado!</p>
                    <section class="difuminado__btn">
                        <a href="contact_us.php" class="btn__general">Contactanos</a>
                    </section>
                </section>
            </li>

        </ul>
    </section>

    <section class="main__anuncio">

        <section class="anuncio__telefonos">

            <section class="telefonos__contenedor">
                <section class="contenedor__telefono">
                    <section class="telefono__titulo">
                        <h2 class="titulo__punto">RODADERO &#40;PRINCIPAL&#41;</h2>
                    </section>
                    <section class="telefono__numeros">
                        <section class="numeros__icono">
                            <img src="images/telephone.png" alt="telefono" class="icono__tel" loading="lazy">
                        </section>
                        <section class="numeros__telefonicos">
                            <p class="telefonicos__numero">605 422 58 30 &#45; 605 422 72 55</p>
                        </section>
                    </section>
                </section>
                <section class="contenedor__telefono">
                    <section class="telefono__titulo">
                        <h2 class="titulo__punto">BELLO HORIZONTE &#45; HOTEL ZUANA</h2>
                    </section>
                    <section class="telefono__numeros">
                        <section class="numeros__icono">
                            <img src="images/telephone.png" alt="telefono" class="icono__tel" loading="lazy">
                        </section>
                        <section class="numeros__telefonicos">
                            <p class="telefonicos__numero">605 432 16 00 &#45; 605 432 29 00</p>
                        </section>
                    </section>
                </section>
                <section class="contenedor__celular">
                    <section class="celular__contenedor">
                        <section class="contenedor__icono">
                            <img src="images/cellphone.png" class="icono__cel" alt="Celular" loading="lazy">
                        </section>
                        <section class="contenedor__cel">
                            <p class="cel__numeros">310 635 03 12 &#45; 317 849 36 36</p>
                        </section>
                    </section>
                    <section class="contenedor__whatsapp">
                        <section class="whatsapp__icono">
                            <a href="https://api.whatsapp.com/send?phone=573017656646"
                                target="_blank">
                                <img src="images/whatsapp.png" class="logo__whatsapp" alt="whatsapp" loading="lazy">
                            </a>
                        </section>
                        <section class="whatsapp__numero">
                            <a class="numero__tels" href="https://api.whatsapp.com/send?phone=573017656646" target="_blank">
                                <p class="tels__whatsapp">301 765 66 46</p>
                            </a>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>

    <section class="main__lema">
        <section class="anuncio__lema">
            <section class="lema__texto">
                <section class="texto__lema">
                    <h2 class="lema__titulo">TAXI SEGURO</h2>
                </section>
                <section class="texto__subtexto">
                    <p class="subtexto__parrafo">El mejor servicio acompañado de confianza y rapidez.</p>
                </section>
                <section class="texto__descripciones">
                    <section class="descripciones__servicio">
                        <h2 class="servicio__titulo"><a href="service.php">Servicios</a></h2>
                    </section>
                    <section class="descripciones__servicios">
                        <h2 class="servicios__info">Transporte de Pasajeros</h2>
                        <h2 class="servicios__info">Rutas Contratadas</h2>
                        <h2 class="servicios__info">Viajes a cualquier ciudad</h2>
                        <h2 class="servicios__info">Transporte Turístico</h2>
                        <h2 class="servicios__info"><a href="service.php">Ver más...</a></h2>
                    </section>
                </section>
            </section>
            <section class="lema__auto">
                <section class="texto__descripcion">
                    <img class="descripcion__imagen" loading="lazy" src="images/247.png" alt="24/7">
                    <section class="descripcion__consejo">
                        <h2 class="consejo__info">Te ofrecemos nuestros servicios las 24 horas 7 días de la semana
                        </h2>
                        <h2 class="consejo__info">¡Siéntete confiado con nosotros y con la calidad prestada!</h2>
                    </section>
                    <section class="descripcion__disponibilidad">
                        <section class="disponibilidad__fondo">
                            <a href="contact_us.php" class="fondo__texto">Contactanos</a>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <section class="auto__taxi">
            <img src="images/auto2.png" id="animado" alt="Taxi" class="taxi__img" loading="lazy">
        </section>
    </section>

    <section class="main__reguladores">
        <section class="reguladores__contenedor">
            <section class="contenedor__description">
                <h2 class="description__question">¿Por qué elegir Taxi Rodadero Bello Horizonte?</h2>
            </section>

            <section class="contenedor__razones">
                <section class="razones__contenedor">
                    <section class="contenedor__contacto">
                        <img class="contacto__imagen" src="images/medio.png" alt="medio de contacto" loading="lazy">
                        <section class="contenedor__razon">
                            <img src="images/call0.png" alt="llamada" class="razon__img" loading="lazy">
                            <p class="razon__texto">
                                Porque puedes solicitar de manera gratuita
                                nuestra APP Taxi Rodadero, para que
                                solicite sus servicios desde la comodidad de
                                su smartphone.
                                Igualmente puede solicitar su servicio por
                                WhatsApp a la línea 310 635 03 12 o a la línea 
                                telefónica 605 422 58 30.
                            </p>
                        </section>
                        </section>
                    </section>
                    <section class="razones__contenedor">
                        <section class="contenedor__contacto">
                            <img class="contacto__imagen" src="images/escoger.jpg" alt="razones" loading="lazy">
                            <section class="contenedor__razon">
                                <img src="images/secure.png" alt="seguro" class="razon__img" loading="lazy">
                                <p class="razon__texto">
                                    Porque nuestra empresa cuenta con todos los seguros 
                                    de ley y adicionalmente cuenta con cobertura 
                                    por exceso en caso de requerirlo; que le 
                                    garantiza a nuestros usuarios, que estarán 
                                    cubiertos por un mayor valor al que exige él 
                                    Gobierno por ley y sus decretos reglamentarios.
                                </p>
                            </section>
                        </section>
                    </section>
                    <section class="razones__contenedor">
                        <section class="contenedor__contacto">
                            <img class="contacto__imagen" src="images/recomendado.jpg" alt="recomendado" loading="lazy">
                            <section class="contenedor__razon">
                                <img src="images/insignia.png" alt="calidad" class="razon__img" loading="lazy">
                                <p class="razon__texto">
                                    Porque trabajamos constantemente en el mejoramiento 
                                    continuo de los servicios que se prestan. Nuestros 
                                    vehículos son nuevos y equipados con tecnología de 
                                    punta; con personal calificado y calidad humana.
                                </p>
                            </section>
                        </section>
                    </section>
                </section>
                <section class="reguladores__imagen">
                    <section class="imagen__description">
                        <p class="description__parrafo">
                            Cumplimos con todos los
                            requerimientos establecidos por los diferentes
                            entes regulatorios para que siempre tengas
                            un destino tranquilo y seguro.
                        </p>
                    </section>
                </section>
                <section class="reguladores__entes">
                    <section class="entes__contenedor">
                        <figure class="contenedor__item">
                            <a href="https://www.runt.com.co" target="_blank" title="Runt">
                                <img class="sitio__img" src="https://www.runt.com.co/sites/all/themes/runt/logo.png"
                                    alt="runt" loading="lazy">
                            </a>
                        </figure>

                        <figure class="contenedor__item">
                            <a href="https://www.mintransporte.gov.co" target="_blank" title="MinTransporte">
                                <img class="sitio__img"
                                    src="https://www.mintransporte.gov.co/info/mintransporte/media/bloque1887.jpg"
                                    alt="mintransporte" loading="lazy">
                            </a>
                        </figure>
                        <figure class="contenedor__item">
                            <a href="https://www.santamarta.gov.co/" target="_blank" title="Alcaldia">
                                <img class="sitio__img"
                                    src="https://www.santamarta.gov.co/sites/all/themes/bootstrap/img/logo500.png"
                                    alt="alcaldia" loading="lazy">
                            </a>
                        </figure>
                        <figure class="contenedor__item">
                            <a href="https://www.supertransporte.gov.co" target="_blank" title="SuperTransporte">
                                <img class="sitio__img"
                                    src="https://www.supertransporte.gov.co/wp-content/uploads/2019/08/supertransporte.png"
                                    alt="supertransporte" loading="lazy">
                            </a>
                        </figure>
                        <figure class="contenedor__item">
                            <a href="https://fcm.org.co/simit/#/home-public" target="_blank" title="Simit">
                                <img class="sitio__img"
                                    src="https://cdn.quipux.com/simit2/resources/images/logo-landing.png" alt="simit"
                                    loading="lazy">
                            </a>
                        </figure>
                    </section>
                </section>
            </section>
        </section>
    </section>
    
    <section class="main__app">
        <section class="app__title">
            <h2 class="title__text">NUESTRA APLICACIÓN DISPONIBLE PARA ANDROID & IOS</h2>
        </section>
        <hr class="app__barra">
        <section class="app__anuncio">
            <section class="app__imagen">
                <section class="imagen__movil">
                    <img src="images/phone.png" alt="celular" class="movil__img" loading="lazy">
                </section>
                <section class="imagen__slider">
                    <ul class="slider__app">
                        <li class="app__li"><img src="images/app1.jpg" alt="imagen de la App" loading="lazy"
                            class="li__img"></li>
                        <li class="app__li"><img src="images/app2.jpg" alt="imagen de la App" loading="lazy"
                            class="li__img"></li>
                        <li class="app__li"><img src="images/app3.jpg" alt="imagen de la App" loading="lazy"
                            class="li__img"></li>
                        <li class="app__li"><img src="images/app4.jpg" alt="imagen de la App" loading="lazy"
                            class="li__img"></li>
                    </ul>
                </section>
            </section>
            <section class="app__description">
                <section class="description__logoapp">
                    <img class="logoapp__imagen" loading="lazy" src="images/logo.png" alt="logo">
                </section>
                <section class="description__app">
                    <h2 class="app__titulo">Taxi Rodadero</h2>
                </section>
                <section class="description__descarga">
                    <p class="descarga__text">¡Descargala y solicita tu servicio de taxi de manera segura y de
                        confianza!</p>
                </section>
                <section class="description__botones">
                    <a class="botones__link botones__link--android"
                        href="https://play.google.com/store/apps/details?id=com.taxisrodadero.santamarta&hl=es"
                        target="_blank">
                        <section class="botones__android"></section>
                    </a>
                    <a class="botones__link botones__link--ios"
                        href="https://apps.apple.com/us/app/taxi-rodadero/id1501180944" target="_blank">
                        <section class="botones__ios"></section>
                    </a>
                </section>
                <section class="description__lema">
                    <p class="lema__text">Taxi seguro, el mejor servicio acompañado de confianza y rapidez</p>
                </section>
            </section>
        </section>
    </section>

    <section class="main__contenedor">
        <section class="contenedor__pasos">
            <section class="pasos__titulo">
                <h2 class="titulo__registro">¿TE GUSTARÍA SER PARTE DE NUESTROS COMISIONISTAS?</h2>
            </section>
            <section class="pasos__container">
                <section class="container__imagen">
                    <img class="imagen__grupo" loading="lazy" src="images/modelo2.png" alt="Equipo de trabajo">
                </section>
                <section class="container__contenedor">
                    
                    <section class="contenedor__elementos">
                        <section class="contenedor__paso">
                            <section class="paso__imagen">
                                <img class="imagen__paso" src="images/hotel.png" alt="Hotel" loading="lazy">
                            </section>
                            <section class="paso__icono">
                                   <h2 class="icono__numero">1</h2>
                            </section>
                            <p class="paso__texto">Podrán ser comisionistas empresas que soliciten un gran flujo de
                                servicios al día ejemplo hoteles, agencias, etc.</p>
                        </section>
                        <section class="contenedor__paso">
                            <section class="paso__imagen">
                                <img class="imagen__paso" src="images/form.png" alt="formulario" loading="lazy">
                            </section>
                            <section class="paso__icono">
                                <h2 class="icono__numero">2</h2>
                            </section>
                            <p class="paso__texto">Registrate ingresando tus datos personales y del punto de donde
                                se generan los servicios</p>
                        </section>
                        <section class="contenedor__paso">
                            <section class="paso__imagen">
                                <img class="imagen__paso" src="images/check.png" alt="verificado" loading="lazy">
                            </section>
                            <section class="paso__icono">
                                <h2 class="icono__numero">3</h2>
                            </section>
                            <p class="paso__texto">Una vez sea validado podrás realizar servicios e inmediatamente
                                comenzar a comisionar con nosotros.</p>
                        </section>
                    </section>
                    <section class="contenedor__registro">
                        <section class="registro__boton">
                            <a href="usuarios/vista/register.php" class="boton__registrate">Registrate</a>
                        </section>
                    </section>
                </section>
            </section>
        </section>
    </section>
    
    <section class="main__experience">
        <section class="experience__figure">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L80,117.3C160,107,320,85,480,106.7C640,128,800,192,960,181.3C1120,171,1280,85,1360,42.7L1440,0L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
        </section>
    
        <section class="experience__titulo">
            <p class="titulo__experience">¡Experiencia de nuestros comisionistas y clientes en Taxi Rodadero Bello
                Horizonte!
            </p>
        </section>
        <hr class="experience__barra">
        <div class="experience__cards">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/person_1.jpg" alt="persona" loading="lazy" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">Ricardo Sánchez</h2>
                                <p class="description">"Gracias Taxi Rodadero tengo la posibilidad de ganar dinero
                                    extra"
                                </p>
                                <img class="stars" src="images/estrellas.png" alt="estrellas" loading="lazy">
                                
                                
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/person_2.jpg" alt="persona" loading="lazy" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">David Dell</h2>
                                <p class="description">"Tengo más de 2 años comisionando y nunca he tenido
                                    problemas"</p>
                                    <img class="stars" src="images/estrellas.png" alt="estrellas" loading="lazy">
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/person_3.jpg" alt="persona" loading="lazy" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">Steiner Benitez</h2>
                                <p class="description">"Estoy feliz porque tengo una entrada extra con la que
                                    cuento siempre a fin de mes"</p>
                                    <img class="stars" src="images/estrellas.png" alt="estrellas" loading="lazy">
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/person_4.png" alt="persona" loading="lazy" class="card-img">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">Esteban Ruiz</h2>
                                <p class="description">"La mejor empresa que te paga por hacer llamadas muchas
                                    gracias Taxi Rodadero"</p>
                                    <img class="stars" src="images/estrellas.png" alt="estrellas" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-nav-btn"></div>
                <div class="swiper-button-prev swiper-nav-btn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <section class="experience__add">
            <section class="add__write">
                <p class="write__p"><a target="__blank" href="https://g.page/r/CcWIxkAejlenEB0/review"
                    class="p__comentario">Escribe un comentario</a></p>
                <i class="fa-solid fa-pen-clip"></i>
            </section>
            <section class="view__more">
                <p class="more__p"><a target="__blank"
                    href="https://www.google.com/search?q=taxi+rodadero+bellohorizonte&stick=H4sIAAAAAAAAAONgU1I1qLBITTMxTTM0NzSyMExKMbS0MqhINDc1t0g1TDUxSDazsEg2XcQqU5JYkalQlJ-SmJJalK-QlJqTk5-RX5RZlZ9XkgoAlu4oT0gAAAA&hl=es&mat=CT3UjNTsMIqFElcBNqvzOkwOsUw7ZClvJJesapOGwfJitMw1di6rBD-bIcY4PECw4uRq2HiYjdPuUewJAKvrdUUT_HXgK8Fn615LcSqIUyZSsz1ANuTstWr66HLc_nOslmE&authuser=2#lrd=0x8ef45f171281bd19:0xa7578e1e40c688c5,1,,,"
                    class="p__mas">Ver más</a></p>
                <i class="fa-solid fa-circle-plus"></i>
            </section>
        </section>

    </section>








<?php include_once("layout/footer.inc.php");?>
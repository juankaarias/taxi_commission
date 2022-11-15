<?php
    $titulo="Cambio de Contraseña";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="editar__contrasena">
        <section class="contrasena__contenedor">
            <form class="contenedor__contrasena" action="" method="post">
                <div class="contrasena__indicador">
                    <div class="indicador__titulobtn">
                        <div class="titulobtn__titulo">Cambiar de Contraseña</div>
                    </div>
                </div>
                <div class="contrasena__form">
                    <div class="form__user">
                        <div class="user__fotouser">
                            <img class="fotouser__img" src="../../images/person_4.png" alt="Persona" loading="lazy">
                        </div>
                        <div class="fotouser__nombre">JOSE LUIS LOPEZ</div>
                        <div class="fotouser__tipo">Administrador</div>
                    </div>
                    <div class="form__datos">
                        <section class="datos__input">
                            <label class="input__texto" for="idcomisionista">Contraseña Anterior</label>
                            <input class="inputs__caja" type="password" id="idcomisionista" name="idcomisionista" required  placeholder="12345112">
                        </section>
                        <section class="datos__input">
                            <label class="input__texto" for="idcomisionista">Nueva Contraseña</label>
                            <input class="inputs__caja" type="password" id="idcomisionista" name="idcomisionista" required  placeholder="12345112">
                        </section>
                        <section class="datos__input">
                            <label class="input__texto" for="idcomisionista">Confirmar Contraseña</label>
                            <input class="inputs__caja" type="password" id="idcomisionista" name="idcomisionista" required  placeholder="12345112">
                        </section>

                        <div class="indicador__botones">
                            <input class="botones__cambiopassword" type="submit" value="Guardar">
                            <a class="botones__cancelarpassword" href="index.php">
                                <p class="cancelarpassword__btn">Cancelar</p>
                            </a>
                        </div>
                    </div>
                </div>
                
            </form>
        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>
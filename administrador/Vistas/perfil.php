<?php 
    $titulo="Perfil de Usuario";
    include_once("../../layout/header-app.inc.php");
?>

    <section class="perfil__container">
        <section class="container__perfil">
            <div class="perfil__general">
                <div class="general__indicador">
                    <h2 class="indicador__actual">Perfil Usuario</h2>
                    <p class="indicador__ingreso">Creado en sistema: 17/10/2021 18:48 hrs</p>
                </div>
                <div class="general__editar">
                    <a class="editar__btn" href="edit_perfil.php">
                        <i class="btn__icono fa-solid fa-user-pen"></i> 
                        <p class="btn__editar">Editar</p>
                    </a>
                </div>
            </div>
            <div class="perfil__datos">
                <div class="datos__nombre">
                    <p class="nombre__usuario">JOSE LUIS LOPEZ</p> 
                    <p class="nombre__cargo">Administrador</p> 
                </div>
                <div class="datos__avatar">
                    <img class="avatar__user" src="../../images/person_1.jpg" alt="usuario" loading="lazy">
                </div>
            </div>
            <div class="perfil__informacion">
                <div class="informacion__titulo">DATOS BASICOS</div>
                <div class="informacion__formulario">

                    <section class="inputs__generales">
                        <section class="generales__inputs">
                            <label class="inputs__label" for="idcomisionista">Id. Usuario</label>
                            <input class="inputs__input" type="text" id="idcomisionista" name="idcomisionista" required placeholder="12345112">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="nombrescomisionista">Nombres</label>
                            <input class="inputs__input" type="text" id="nombrescomisionista" name="nombrescomisionista" readonly placeholder="Juan Carlos">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="apellidoscomisionista">Apellidos</label>
                            <input class="inputs__input" type="text" name="apellidoscomisionista" id="apellidoscomisionista" readonly placeholder="Arias Vélez">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="idcomisionista">Tipo de usuario</label>
                            <input class="inputs__input" type="text" id="idcomisionista" name="idcomisionista" required placeholder="Administrador">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="nombrescomisionista">Estado</label>
                            <input class="inputs__input" type="text" id="nombrescomisionista" name="nombrescomisionista" readonly placeholder="Activo">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="apellidoscomisionista">Usuario</label>
                            <input class="inputs__input" type="text" name="apellidoscomisionista" id="apellidoscomisionista" readonly placeholder="juanarias">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="idcomisionista">Fecha de registro</label>
                            <input class="inputs__input" type="text" id="idcomisionista" name="idcomisionista" required placeholder="17/10/2021 18:48">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="nombrescomisionista">Teléfono</label>
                            <input class="inputs__input" type="text" id="nombrescomisionista" name="nombrescomisionista" readonly placeholder="3036654321">
                        </section>
                        <section class="generales__inputs">
                            <label class="inputs__label" for="apellidoscomisionista">Fecha de Nacimiento</label>
                            <input class="inputs__input" type="text" name="apellidoscomisionista" id="apellidoscomisionista" readonly placeholder="1993/10/23">
                        </section>
                        <section class="inputs__group inputs__group--destino">
                            <label class="group__label group__label--destino" for="destinop">Email</label>
                            <input class="group__input group__input--destino" type="text" name="destinop" id="destinop" placeholder="juanarias@hotmail.com" >
                        </section>
                    </section>
                
                </div>
            </div>
        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>
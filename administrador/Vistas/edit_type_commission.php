
<?php 
    $titulo="Editar tipo de Comisión";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="nuevo__tipocomision">
        <section class="tipocomision__nuevo">

            <div class="nuevo__indicador">
                <i class="indicador__icon fa-regular fa-pen-to-square"></i>
                <p class="indicador__tipocomision">Editar tipo de Comisión</p>
            </div>

            <form class="nuevo__formulario" action="#" method="post">
                <div class="formulario__encabezado">
                    <h2 class="indicador__nuevotipo">Editar tipo de comisión</h2>
                    <div class="encabezado__linea">
                        <hr class="linea__titulo">
                    </div>
                </div>
                <div class="formulario__datos">
                    <section class="datos__input datos__input--nuevacomision">
                        <label class="input__label" for="idcomisionista">Nombre Comisión</label>
                        <input class="input__entrada" type="text" id="idcomisionista" name="idcomisionista" required  placeholder="Pozo Colorado">
                    </section>
                    <section class="datos__input datos__input--nuevacomision">
                        <label class="input__label" for="idcomisionista">Valor</label>
                        <input class="input__entrada" type="text" id="idcomisionista" name="idcomisionista" required  placeholder="5.800">
                    </section>
                </div>
                <section class="contenedor__submit">
                    <section class="submit__linea">
                        <hr class="linea__submit">
                    </section>                           
                    <input class="submit__agregar" type="submit" value="Agregar">
                    <a href="add_type_commission.php" class="submit__cancelar">
                        <p class="cancelar__btn">Cancelar</p>   
                    </a>
                    <section class="submit__linea">
                        <hr class="linea__submit">
                    </section>
                </section>
            </form>
        </section>
    </section>





<?php include_once("../../layout/footer-app.inc.php");?>
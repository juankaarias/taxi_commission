<?php 
    $titulo="Restaurar Respaldo";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="restaurar__respaldo">
        <section class="respaldo__restaurar">
            <div class="restaurar__copia">
                <i class="copia__icono fa-regular fa-window-restore"></i>
                <h1 class="copia__titulo">Restaurar Copia de seguridad</h1>
            </div>
            <form  class="contenedor__restaurar" action="" method="post">
                <img class="restaurar__imagen" src="../../images/restore2.png" alt="Restaurar copia de seguridad" loading="lazy">
                <h1 class="restaurar__pregunta">¿Desea restaurar copia de seguridad?</h1>
                <p class="restaurar__indicacion">Por favor seleccione un punto de restauranción</p>
                <select name="conductor" id="conductor" class="group__select">
                    <option >Seleccionar</option>
                    <option value="">16/09/2022.sql</option>
                </select>
                <div class="restaurar__botones">
                    <input class="botones__cambiopassword" type="submit" value="Restaurar">
                    <a class="botones__cancelarpassword" href="index.php">
                        <p class="cancelarpassword__btn">Cancelar</p>
                    </a>
                </div>
                <p class="respaldo__info"><span class="info__observacion">Observación:</span> Para la restauración de la base de datos solo funciona en local, para realizar las restuaraciones de la base de datos desde un hosting debe configurar la restauracion desde el Cpanel.</p>
            </form>
            
        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>
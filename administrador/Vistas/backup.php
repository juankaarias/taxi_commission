<?php 
    $titulo="Copia de Seguridad";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="configuracion__respaldo">
        <section class="respaldo__contenedor">
            <div class="contenedor__copia">
                <i class="copia__icono fa-solid fa-database"></i>
                <h1 class="copia__titulo">Respaldo de Seguridad</h1>
            </div>
            <div  class="contenedor__respaldo">
                <img class="respaldo__imagen" src="../../images/backup1.png" alt="backup" loading="lazy">
                <h1 class="respaldo__pregunta">¡Recuerde realizar constantemente copia de seguridad!</h1>
                <p class="respaldo__indicacion">¿Desea generar copia de seguridad?</p>
                <div class="respaldo__botones">
                    <input class="botones__cambiopassword" type="submit" value="Generar">
                    <a class="botones__cancelarpassword" href="index.php">
                        <p class="cancelarpassword__btn">Cancelar</p>
                    </a>
                </div>
                <p class="respaldo__info"><span class="info__observacion">Observación:</span> Este respaldo solo funciona para local, para realizar las copias desde un hosting debe configurar las copias desde el Cpanel.</p>
            </div>
        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>
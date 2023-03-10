<?php
                           
    $titulo="Copia de Seguridad";
    require_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Configuración / Copia de Seguridad / Crear Respaldo</p>
        </div>
    </section>
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
                    
                    <form id="frm__backup">
                        <input type="hidden" value="1" name="backup">
                        <div class="botones__container">
                            <button type ="submit" class = "botones__cambiopassword">Si, generar</button>
                            <button id="btn__cancelbackup" class = "botones__cancelarpassword">Regresar</button> 

                        </div>
                    </form>

                    <!-- <a class="botones__cambiopassword" value="Generar" href="#">Generar</a>
                    <a class="botones__cancelarpassword" href="index.php">
                        <p class="cancelarpassword__btn">Cancelar</p>
                    </a> -->
                </div>
                <p class="respaldo__info"><span class="info__observacion">Observación:</span> Este respaldo solo funciona para local, para realizar las copias desde un hosting debe configurar las copias desde el Cpanel.</p>
            </div>
        </section>
    </section>
<?php include_once("../../layout/footer-app.inc.php");?>
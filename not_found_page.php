<?php 
    $titulo="404 Página no encontrada";
    include_once("layout/header.inc.php");
?>
    <main class="main__error">
        <div class="error__contenedor">
            <div class="contenedor__texto">
                <img class="texto__logo" src="images/varado.png" alt="taxi Varado" loading="lazy">
                <h2 class="texto__tipo">¡Lo sentimos, página no encontrada!</h2>
                
            </div>
            <div class="contenedor__atras">
                <a href="index.php" class="atras__link">
                    <p class="link__atras">Regresar</p>
                </a>
                <p class="atras__detalle">Es posible que haya escrito mal la dirección o que la página se haya movido.</p>
            </div>
        </div>
        <div class="error__barra">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2a2a2a" fill-opacity="1" d="M0,64L26.7,90.7C53.3,117,107,171,160,197.3C213.3,224,267,224,320,197.3C373.3,171,427,117,480,96C533.3,75,587,85,640,80C693.3,75,747,53,800,58.7C853.3,64,907,96,960,128C1013.3,160,1067,192,1120,213.3C1173.3,235,1227,245,1280,224C1333.3,203,1387,149,1413,122.7L1440,96L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
        </div>

<?php include_once("layout/footer.inc.php");?>

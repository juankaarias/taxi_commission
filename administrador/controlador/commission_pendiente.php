<?php
    require_once('../modelo/administrador.php');
    $modeloAdmin = new Admnistrador();
    $data = $modeloAdmin->getComisionPendiente();
    echo json_encode($data);
?>
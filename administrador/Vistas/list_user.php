<?php
    require_once('../modelo/administrador.php');
    $modeloAdmin = new Admnistrador();
    $titulo="Consultar Usuario";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Usuarios / Consultar Usuario</p>
        </div>
        <div class="indicador__main">
            <p class="main__titulo">Consultar Usuario</p>
        </div>
        
    </section>
    <section class="list__user">
        <section class="user__list">
            <div class="list__indicador">
                <i class="indicador__icono fa-regular fa-address-book"></i>
                <p class="indicador__titulo">Consultar Usuario</p>
            </div>
            <div class="lista__usuarios">
                <table id="usuarios" class="display nowrap"  style="width:100%">
                    <thead class="thead__black">
                        <tr>
                            <th>Id</th>
                            <th>Identificación</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Tipo Usuario</th>
                            <th>Estado</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $listaUsuarios = $modeloAdmin->getListUser();
                            if($listaUsuarios != null){
                                foreach ($listaUsuarios as $listaUsuario) {
                        ?>
                        <tr>
                            <td><?=$listaUsuario['Id']?></td>
                            <td><?=$listaUsuario['Identificación']?></td>
                            <td><?=$listaUsuario['Nombres']?></td>
                            <td><?=$listaUsuario['Apellidos']?></td>
                            <td><?=$listaUsuario['TipoUsuario']?></td>
                            <td><?=$listaUsuario['Estado']?></td>
                            <td><?=$listaUsuario['Email']?></td>
                            <td><?=$listaUsuario['Teléfono']?></td>
                            <td>
                                <a class="tabla__btn tabla__btn--editar" href="edit_user.php">
                                    <p class="btn__tabla">Editar</p>
                                </a>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                    <tfoot class="thead__black">
                        <tr>
                            <th>Id</th>
                            <th>Identificación</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Tipo Usuario</th>
                            <th>Estado</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Acción</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
    </section>


<?php include_once("../../layout/footer-app.inc.php");?>
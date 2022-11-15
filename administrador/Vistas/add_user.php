<?php
    $titulo="Crear Usuario";
    include_once("../../layout/header-app.inc.php");
?>
    <section class="commission__indicador">
        <div class="indicador__main">
            <a href="index.php" class="main__link">Inicio</a>
            <p class="link__general">/ Usuarios / Crear Usuario</p>
        </div>
    </section>
    <section class="create__user">
        <section class="user__create">
            <div class="create__indicador">
                <i class="indicador__icono  fa-solid fa-user-plus"></i>
                <p class="indicador__titulo">Crear Usuario</p>
            </div>         
            <form class="create__formuser" action="#" method="post">

                <div class="formuser__indicador">
                    <div class="indicador__cabecera">
                        <h2 class="cabecera__titulo">Datos Básicos</h2>
                        <div class="cabecera__linea">
                            <hr class="linea__cabecera">
                        </div>
                    </div>
                    <p class="indicador__observacion">
                        Todos los campos marcados con 
                        <span class="observacion__asterisco" >*</span> 
                        son obligatorios para la creacion de un nuevo usuario.
                    </p>
                </div>
                <div class="formuser__datos">
                    <div class="datos__basicos">
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="idusuario">Id de Usuario <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="text" id="idusuario" name="idusuario" required  readonly placeholder="12">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="tipousuario">Tipo Usuario <span class="observacion__asterisco" >*</span> </label>
                            <select name="tipousuario" id="tipousuario" class="inputs__inputbasico" onChange="mostrar(this.value);">
                                <option selected="true" disabled="disabled">Seleccionar</option>
                                <option value="administrador">Administrador</option>
                                <option value="operador">Operador</option>
                                <option value="comisionista">Comisionista</option>
                                <option value="conductor">Conductor</option>
                            </select>
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="estadousuario">Estado Usuario <span class="observacion__asterisco" >*</span> </label>
                            <select name="estadousuario" id="estadousuario" class="inputs__inputbasico">
                                <option selected="true" disabled="disabled">Seleccionar</option>
                                <option value="urbana">Activo</option>
                                <option value="areopuerto">Inactivo</option>
                            </select>
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="tipoid">Tipo de Identificación <span class="observacion__asterisco" >*</span> </label>
                            <select name="tipoid" id="tipoid" class="inputs__inputbasico">
                                <option selected="true" disabled="disabled">Seleccionar</option>
                                <option value="urbana">CC</option>
                                <option value="areopuerto">CE</option>
                                <option value="areopuerto">NIT</option>
                                <option value="areopuerto">PAP</option>
                            </select>
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="numeroid">Numero Identificación <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="text" id="numeroid" name="numeroid" required placeholder="12345112">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="nombresuser">Nombres <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="text" id="nombresuser" name="nombresuser" required placeholder="Jose David">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="apellidosuser">Apellidos <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="text" id="apellidosuser" name="apellidosuser" required placeholder="Montes Araujo">
                        </section>
                    </div>
                    <div class="datos__basicos">
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="usuariologin">Usuario <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="text" id="usuariologin" name="usuariologin" required placeholder="jose2020">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="contrasenalogin">Contraseña <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="password" id="contrasenalogin" name="contrasenalogin" required placeholder="*******">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="telefonouser">Numero Teléfono <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="text" id="telefonouser" name="telefonouser" required placeholder="3012345112">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="fnacimientouser">Fecha Nacimiento</label>
                            <input class="inputs__inputbasico" type="date" id="fnacimientouser" name="fnacimientouser" required placeholder="12345112">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="emailuser">Correo Electrónico <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="email" id="emailuser" name="emailuser" required placeholder="correo@correo.com">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="fregistrouser">Fecha Registro <span class="observacion__asterisco" >*</span></label>
                            <input class="inputs__inputbasico" type="date" id="fregistrouser" name="fregistrouser" required placeholder="12345112">
                        </section>
                        <section class="basicos__inputs">
                            <label class="inputs__labelbasico" for="fotouser">Foto Usuario</label>
                            <input class="inputs__inputbasico" type="file" id="fotouser" name="fotouser" required placeholder="12345112">
                        </section>
                    </div>
                </div>
                <div class="formuser__comisionista" id="comisionista">
                    <div class="comisionista__indicador">
                        <div class="indicador__cabecera">
                            <h2 class="cabecera__titulo">Comisionista</h2>
                            <div class="cabecera__linea">
                                <hr class="linea__cabecera">
                            </div>
                        </div>
                        <p class="indicador__observacion">Complete los siguientes campos del punto de donde genera los servicios y su informacion de Banco personal</p>
                    </div>
                    <div class="comisionista__datos">
                        <div class="datos__contenedor">
                            <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="idcomisionista">Nombre Punto <span class="observacion__asterisco" >*</span></label>
                                <input class="inputs__inputbasico" type="text" id="idcomisionista" name="idcomisionista" required placeholder="Hotel Estelar Marruecos">
                            </section>
                            <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="idcomisionista">Dirección Punto <span class="observacion__asterisco" >*</span></label>
                                <input class="inputs__inputbasico" type="text" id="idcomisionista" name="idcomisionista" required placeholder="Calle 24a #114-223">
                            </section>
                            
                        </div>
                        <div class="datos__contenedor">
                            <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="bancouser">Banco</label>
                                <select name="bancouser" id="bancouser" class="inputs__inputbasico">

                                    <option >Seleccionar</option>
                                    <option value="urbana">Bancolombia</option>
                                    <option value="areopuerto">Davivienda</option>
                                    <option value="viaje">BBVA</option>
                                    <option value="Turismo">Nequi</option>
                                </select>
                            </section>
                            <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="tipocuentauser">Tipo Cuenta</label>
                                <select name="tipocuentauser" id="tipocuentauser" class="inputs__inputbasico">
                              
                                    <option >Seleccionar</option>
                                    <option value="urbana">Ahorros</option>
                                    <option value="areopuerto">Corriente</option>
                                    <option value="viaje">Nómina</option>
                                </select>
                            </section>
                            <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="numerocuenta">Numero Cuenta</label>
                                <input class="inputs__inputbasico" type="numerocuenta" id="numerocuenta" name="idcomisionista" required placeholder="5234321234">
                            </section>
                        </div>
                    </div>
                </div>
                <div class="formuser__conductor" id="conductor">
                    <div class="conductor__indicador">
                        <div class="indicador__cabecera">
                            <h2 class="cabecera__titulo">Conductor</h2>
                            <div class="cabecera__linea">
                                <hr class="linea__cabecera">
                            </div>
                        </div>
                        <p class="indicador__observacion">Complete los siguientes campos del vehículo y el turno del conductor.</p>
                    </div>
                    <div class="conductor__datos">
                        <div class="datos__contenedor">
                            <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="codvehiculo">Cod. Vehículo <span class="observacion__asterisco" >*</span></label>
                                <input class="inputs__inputbasico" type="text" id="codvehiculo" name="codvehiculo" required placeholder="25">
                            </section>
                            <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="placavehiculo">Placa Vehículo <span class="observacion__asterisco" >*</span></label>
                                <input class="inputs__inputbasico" type="text" id="placavehiculo" name="placavehiculo" required placeholder="TZT 543">
                            </section>
                        </div>                        
                        <div class="datos__contenedor">
                        <section class="basicos__inputs">
                                <label class="inputs__labelbasico" for="turnoconductor">Turno Conductor <span class="observacion__asterisco" >*</span></label>
                                <select name="turnoconductor" id="turnoconductor" class="inputs__inputbasico">
                                    <option >Seleccionar</option>
                                    <option value="urbana">Diurno</option>
                                    <option value="areopuerto">Nocturno</option>
                                    <option value="viaje">Taponero</option>
                                </select>
                            </section>
                        </div>
                    </div>
                </div>
                <section class="contenedor__submit">
                    <section class="submit__linea">
                        <hr class="linea__submit">
                    </section>                           
                    <input class="submit__agregar" type="submit" value="Guardar">
                    <a href="add_user.php" class="submit__cancelar">
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
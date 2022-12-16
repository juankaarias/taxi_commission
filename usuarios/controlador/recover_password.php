<?php
    require_once('../modelo/usuarios.php');
    $modeloUsuarios = new Usuarios();
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require '../../vendor/autoload.php';

    
    $message = null;

    if(isset($_POST['correo'])){

        $emailrecover = trim(strtolower(filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL))); 

        if(empty($emailrecover) || !preg_match("/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $emailrecover)){
            $message = "<script>Swal.fire({position: 'center', icon: 'error', title: '¡Correo electrónico invalido!', showConfirmButton: false, timer: 2000}); document.getElementById('err__email').innerHTML='¡Digite un correo electrónico valido!';</script>";
            
        }else if($data = $modeloUsuarios->getEmail($emailrecover) == null){  
            $message = "<script> Swal.fire({ position: 'center', icon: 'success', title: '¡Enviado con exito!', text:'Pronto recibirás un correo electrónico para restablecer tu contraseña. Si no lo encuentras, comprueba la carpeta de correo no deseado y la papelera.', showCloseButton: true,showConfirmButton: true}).then(function() {
                window.location = '../vista/index.php';
            });frm__recover[0].reset();</script>"; 

        }else{
            
            $mail = new PHPMailer(true);

            try {


                $message = "<script> Swal.fire({ position: 'center', icon: 'success', title: '¡Enviado con exito!', text:'Pronto recibirás un correo electrónico para restablecer tu contraseña. Si no lo encuentras, comprueba la carpeta de correo no deseado y la papelera.', showCloseButton: true,showConfirmButton: true}).then(function() {
                    window.location = '../vista/index.php';
                });frm__recover[0].reset();</script>"; 
                
                /* Envio de enlace de recuperación password */
                $email = $modeloUsuarios->getEmail($emailrecover);
                if($email != null){
                    foreach ($email as $item) {
                        $correo = $item['email'];
                        $nombre = $item['nombre'];
                    }  
                }
                $token = $modeloUsuarios->generarTokenClave();
                $respuesta = $modeloUsuarios->addToken($token, $correo);
                
                $linkRecuperar = "http://localhost/taxi_commission/usuarios/vista/new_password.php?id=".$correo."&token=".$token;

                //Server settings
                $mail->SMTPDebug = 0;                      
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = 'taxirodaderobellohorizonte@gmail.com';                     
                $mail->Password   = 'ldbvvrhynkwasjsv';                               
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
                $mail->Port       = 465;                                    

                //Recipients
                $mail->setFrom('taxirodaderobellohorizonte@gmail.com', 'Taxi Rodadero');
                $mail->addAddress($correo, $nombre);     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Recuperancion de Clave - Sistema Comisiones';
               
                
                $mail->Body = "
                    <!DOCTYPE html>
                    <html lang='es'>
                    
                    <body>
                        <table width='100%' style='background-color: #FFF;' cellpadding='0' cellspacing='0' border='0'>
                            <tr>
                                <td>
                                    <table align='center' width='100%' border='0' cellpadding='0' cellspacing='0'
                                        style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;box-shadow: 0px 0px 2px;padding:20px'>
                                        <thead>
                                            <tr height='80px' style='background-color: #FFF'>
                                                <th><img width='15%' style='display:block; margin: 0 auto; border-radius: 100%;'
                                                        src='https://play-lh.googleusercontent.com/MEJoeCsGPYkOoQybZkuByjgHrMlrcfNI6kuP9o5EAmleQAAZGQWNVE4V87ECCqerzg'>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
                                                <th colspan='4' style='border-bottom:solid 1px #ccc; font-family:Verdana, Geneva, sans-serif; 
                                                    color:#000; font-size:28px;'>Taxi Rodadero <p style='line-height: 0px;font-size: 18px;font-weight: 100;'>Bello
                                                    Horizonte S.A.S</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td colspan='4' style='padding:0px 15px 15px 15px;'>
                                                    <p style='font-size:18px;'><b>Estimado(a) $nombre</b></p>
                                                    <hr />
                                                    <p style='font-size:18px;' align='center'>
                                                        Este email confirma que usted ha solicitado recientemente el restablecimiento de su
                                                        contraseña en el Sistema de Comisiones de Taxi Rodadero. Para restablecer su
                                                        contraseña por favor haga clic en Restablecer Contraseña.</b></p>
                                                    </p>
                                                    <p style='color: gray; font-size: 12px; text-align: center;margin: 30px 0 0'>Luego de
                                                        hacer clic en el boton <strong>Restablecer Contraseña</strong>, siga las siguientes instrucciones para crear y confirmar su
                                                        nueva contraseña.</p><br><br>
                                                    <div style='width: 100%; text-align: center'>
                                                    <a style='text-decoration: none;border-radius: 5px; padding: 11px 23px; color: white; background-color: black'
                                                            href='$linkRecuperar'>
                                                            Restablecer Contraseña</a></div>
                                                    <p style='color: #b3b3b3; font-size: 12px; text-align: center;margin: 30px 0 0'>&copy;
                                                        2022 Taxi Rodadero Bello Horizonte S.A.S - Todos los derechos reservados</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </body>
                    
                    </html>
                ";

                $mail->send();

            } catch (Exception $e) {
               /*  echo "No se pudo enviar el mensaje. Error de correo: {$mail->ErrorInfo}"; */
                $message = "<script>Swal.fire({position: 'center', icon: 'error', title: '¡Error del servidor SMTP!', text:'No se pudo enviar el mensaje',showConfirmButton: false, timer: 2500}); document.getElementById('err__email').innerHTML='¡No se pudo enviar el mensaje!';</script>";
            }

        } 
        echo $message;
    } else{
        header("Location: ../vista/index.php");
    }


?>
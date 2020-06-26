

<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];
$cel = $_POST['cel'];
$hm = $_POST['hm'];
$formcontent="

<strong>Nombre:</strong> $name <br>
<strong>Apellido:</strong> $surname <br>
<strong>DNI:</strong> $dni <br>
<strong>Telefono:</strong> $cel <br>
<strong>Sexo:</strong> $hm <br>
<strong>Email:</strong> $correo <br><br>

<strong>Consulta:</strong> $texto


";


//Incluimos la clase de PHPMailer
require_once('phpmailer/class.phpmailer.php');

$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()

//Usamos el SetFrom para decirle al script quien envia el correo
$correo->SetFrom("$correo");

//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
$correo->AddReplyTo("$correo");

//Usamos el AddAddress para agregar un destinatario
$correo->AddAddress("barbiie.8@gmail.com");
header('Location: https://www.google.com/');

//Ponemos el asunto del mensaje
$correo->Subject = "Consulta - NilPix";

//UTF
$correo->CharSet = 'UTF-8';

/*
 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
 * $correo->IsHTML(false);
 * $correo->Body = "Mi mensaje en Texto Plano";
 */
$correo->MsgHTML("$formcontent");

//Enviamos el correo
if(!$correo->Send()) {
  echo "Hubo un error: " . $correo->ErrorInfo;
} else {
  echo "Mensaje enviado con exito.";
}

?>

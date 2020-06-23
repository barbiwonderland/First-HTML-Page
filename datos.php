<?php


$name= $_post["name"];
$surname = $_post["surname"];
$dni = $_POST["dni"];
$correo = $_post["correo"];
$cel = $_post["cel"];
$asunto = $_post["asunto"];

if(mail("barbiie.8@gmail.com",$name,$surname,$dni,$correo,$cel,$asunto))
{
    echo "mail enviado"; 
    else{
        echo "No se pudo enviar la información";
    }
}

?>

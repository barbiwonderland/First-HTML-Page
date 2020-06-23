<?php


$name= $_post["name"];
$surname = $_post["surname"];
$dni = $_POST["dni"];
$correo = $_post["correo"];
$cel = $_post["cel"];
$texto = $_post["texto"];

if(mail("barbiie.8@gmail.com",$name,$surname,$dni,$correo,$cel,$texto))
{
    echo "mail enviado"; 
    else{
        echo "No se pudo enviar la información";
    }
}

?>

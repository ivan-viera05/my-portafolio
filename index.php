<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    body{
text-align: center;

    }
</style>
<body>
    <h2>formulario</h2>
    <form action="index.php" method="POST">
<label for="nombre">Nombre</label>
<input type="text" id="nombre" name="nombre"> <br>
<label for="email">email</label>
<input type="email" id="email" name="email"><br>
<label for="mensaje">mensaje</label>
<textarea name="mensaje" id="mensaje" cols="10" rows="5"></textarea><br>
<input type="submit" value="enviar" name="enviar">
    </form>

<?php

if(isset($_POST["enviar"])){
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];

$destinatario="ivicrack78@gmail.com";
$asunto="Nuevo mensaje de: $email";

$contenido="nombre: $nombre \n";
$contenido.="email: $email \n";
$contenido.="mensaje: $mensaje ";


$header="from: formulariodecontacto@ivanviera.com";

$email=mail($destinatario, $asunto, $contenido, $header);

if($email){
    echo"<sript>alert('el correo se envio correctamente');</script>";
}else  echo"<sript>alert('el correo no envio correctamente');</script>";

}
?>

    


</body>
</html>
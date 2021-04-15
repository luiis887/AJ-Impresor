<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Tus datos han sido cargados con exito, gracias por tu compra.
    En breve nuestro equipo se comunicara contigo.
<?php
$con= mysqli_connect("localhost", "root", "", "prueba") or die('Error en la conexion');
$sql= "INSERT INTO ventas VALUES (null, '".$_POST["destinatario"]."', '".$_POST["Apdestinatario"]."', '".$_POST["reply_to"]."','".$_POST["direccion"]."','".$_POST["fecha"]."', '".$_POST["descripcion"]."', '".$_POST["productos"]."')";
$resultado= mysqli_query($con,$sql) or die ('Error en el query');
mysqli_close($con);
?>
<a href="index.html"> Volver al inicio</a>
</body>
</html>



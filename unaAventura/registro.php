<?php 
$Cont = $_POST["contra"];
$Correo = $_POST["correo"];
$Nomb = $_POST["nombre"];
$Edad = $_POST["edad"];

$Conexion = mysqli_connect("localhost","root","", "aventura");
$Sql = "SELECT * FROM usuarios WHERE nombre = '$Nomb' OR correo = '$Correo'";
$Result = mysqli_query($Conexion, $Sql);
$Contador = mysqli_num_rows($Result);

if ($Contador >= 1) {
    echo "<p> El usuario ya existe, selecione otro nombre de usuario </p>";
}
else
{
    $Sql2="INSERT INTO usuarios (contra,correo,nombre,edad) VALUES('$Cont','$Correo','$Nomb','$Edad')";
    $Result2= mysqli_query($Conexion, $Sql2);
    echo " <p> El usuario se ha registrado exitosamente</p> ";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>

	p{color: white; font-size: 250%;
		margin-top: 20%;
	    margin-left: 15%;
	    font-family: surabanglus;}

}
</style>

</head>
<body background="img/estrellas.png">

</body>
</html>
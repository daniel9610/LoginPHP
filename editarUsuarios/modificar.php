<?php

$server="localhost";
$user="root";
$contraseña="";
$db="loginPHP";
$conexion = mysql_connect($server,$user,$contraseña)or die ("Error al conectarse con la base de datos");

$Id=$_POST['Id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$Genero=$_POST['Genero'];
$password=$_POST['password'];
$Rol=$_POST['Rol'];
mysql_select_db($db,$conexion) or die ("Error al conectar la base de datos");
mysql_query("UPDATE usuarios SET nombres = '$nombres', apellidos='$apellidos', email='$email', Genero='$Genero', password='$password', Rol='$Rol'
	WHERE Id ='$Id'");
echo "Modificado correctamente";
?>
<!--falta especificar bien lo del id para que no se modifiquen todos los campos-->
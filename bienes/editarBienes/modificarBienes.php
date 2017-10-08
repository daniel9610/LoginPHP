<?php

$server="localhost";
$user="root";
$contraseña="";
$db="loginPHP";
$conexion = mysql_connect($server,$user,$contraseña)or die ("Error al conectarse con la base de datos");

$id_bienes=$_POST['id_bienes'];
$descripcion=$_POST['descripcion'];
$tipo=$_POST['tipo'];

mysql_select_db($db,$conexion) or die ("Error al conectar la base de datos");
mysql_query("UPDATE bienes SET descripcion = '$descripcion', tipo='$tipo' 
	WHERE id_bienes ='$id_bienes'");
echo "Modificado correctamente";
?>
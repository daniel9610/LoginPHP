<?php

$server="localhost";
$user="root";
$contraseña="";
$db="loginPHP";
$conexion = mysql_connect($server,$user,$contraseña)or die ("Error al conectarse con la base de datos");

$id_inventario=$_POST['id_inventario'];
$codigo_unico=$_POST['codigo_unico'];
$id_bienes=$_POST['id_bienes'];
$ubicacion=$_POST['ubicacion'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$id_responsable=$_POST['id_responsable'];





mysql_select_db($db,$conexion) or die ("Error al conectar la base de datos");
mysql_query("UPDATE inventario SET codigo_unico = '$codigo_unico', id_bienes='$id_bienes', ubicacion='$ubicacion', fecha_ingreso='$fecha_ingreso', id_responsable='$id_responsable'   
	WHERE id_inventario ='$id_inventario'");
echo "Modificado correctamente";
?>
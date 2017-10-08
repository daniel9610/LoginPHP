<?php

$server="localhost";
$user="root";
$contraseña="";
$db="loginPHP";
$conexion = mysql_connect($server,$user,$contraseña)or die ("Error al conectarse con la base de datos");

$id_proveedor=$_POST['id_proveedor'];
$nro_orden=$_POST['nro_orden'];
$ruc=$_POST['ruc'];
$razon_social=$_POST['razon_social'];
$fecha_orden=$_POST['fecha_orden'];
$monto_total=$_POST['monto_total'];
$fecha_entrega=$_POST['fecha_entrega'];




mysql_select_db($db,$conexion) or die ("Error al conectar la base de datos");
mysql_query("UPDATE proveedor SET nro_orden = '$nro_orden', ruc='$ruc', razon_social='$razon_social', fecha_orden='$fecha_orden', monto_total='$monto_total', fecha_entrega='$fecha_entrega'   
	WHERE id_proveedor ='$id_proveedor'");
echo "Modificado correctamente";
?>
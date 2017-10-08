<?php

$server="localhost";
$user="root";
$contraseña="";
$db="loginPHP";
$conexion = mysql_connect($server,$user,$contraseña)or die ("Error al conectarse con la base de datos");

$con=mysql_connect($server, $user, $contraseña) or die ("problemas en server");
mysql_select_db($db, $con) or die ("problemas con la db");

$reg= mysql_query("SELECT Id FROM usuarios WHERE Id ='$_POST[Id]'", $con);
if($re= mysql_fetch_array($reg)){
	mysql_query("DELETE FROM usuarios WHERE Id = '$_POST[Id]'",$con);
	echo "registro eliminado";
}else{
echo "los datos han sido eliminados";
}
?>
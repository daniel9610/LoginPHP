<?php

function conexion(){
	$conexion = mysqli_connect("localhost", "root", "", "loginphp");

return $conexion;
} 
//if (!$conexion){
//	echo 'error al conectar';
//}
//else{
//	echo 'conectado';
//}
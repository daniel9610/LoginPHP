<?php
class Lectura_bienes{
	function recuperarDatos(){
		$host="localhost";
		$user="root";
		$pw="";
		$db="loginphp";

	$Con= mysql_connect($host, $user, $pw)or die ("no se puede conectar");
	mysql_select_db($db, $Con)or die ("no se encontro la base de datos");
	$query = "SELECT * FROM bienes";
	$resultado = mysql_query($query);
	while($fila = mysql_fetch_array($resultado)){
		echo "<tr>";
		echo "<td> $fila[id_bienes]</td> <td>$fila[descripcion]</td> <td>$fila[tipo]</td> <br>";
		echo "</tr>";
		
	} 
}
}
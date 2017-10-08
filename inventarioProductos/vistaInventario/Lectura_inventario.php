<?php
class Lectura_inventario{
	function recuperarDatos(){
		$host="localhost";
		$user="root";
		$pw="";
		$db="loginphp";

	$Con= mysql_connect($host, $user, $pw)or die ("no se puede conectar");
	mysql_select_db($db, $Con)or die ("no se encontro la base de datos");
	$query = "SELECT * FROM inventario";
	$resultado = mysql_query($query);
	while($fila = mysql_fetch_array($resultado)){
		echo "<tr>";
		echo "<td> $fila[id_inventario]</td> <td> $fila[codigo_unico]</td> <td>$fila[id_bienes]</td> <td>$fila[ubicacion]</td> <td> $fila[fecha_ingreso]</td> <td> $fila[id_responsable]</td><br>";
		echo "</tr>";
		
	} 
}
}
<?php
class Lectura_proveedor{
	function recuperarDatos(){
		$host="localhost";
		$user="root";
		$pw="";
		$db="loginphp";

	$Con= mysql_connect($host, $user, $pw)or die ("no se puede conectar");
	mysql_select_db($db, $Con)or die ("no se encontro la base de datos");
	$query = "SELECT * FROM proveedor";
	$resultado = mysql_query($query);
	while($fila = mysql_fetch_array($resultado)){
		echo "<tr>";
		echo "<td> $fila[nro_orden]</td> <td> $fila[ruc]</td> <td>$fila[razon_social]</td> <td>$fila[fecha_orden]</td> <td> $fila[monto_total]</td> <td> $fila[fecha_entrega]</td><br>";
		echo "</tr>";
		
	} 
}
}
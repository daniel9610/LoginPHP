<?php
class cnDB{
	function recuperarDatos(){
		$host="localhost";
		$user="root";
		$pw="";
		$db="loginphp";

	$Con= mysql_connect($host, $user, $pw)or die ("no se puede conectar");
	mysql_select_db($db, $Con)or die ("no se encontro la base de datos");
	$query = "SELECT * FROM usuarios";
	$resultado = mysql_query($query);
	while($fila = mysql_fetch_array($resultado)){
		echo "<tr>";
		echo "<td> $fila[Id]</td> <td> $fila[nombres]</td> <td>$fila[apellidos]</td> <td>$fila[email]</td> <td> $fila[Genero]</td> <td> $fila[password]</td> <td> $fila[Rol]</td> <br>";
		echo "</tr>";
		
	} 
}
}
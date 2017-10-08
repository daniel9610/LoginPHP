<?php

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {

   echo "Esta pagina es solo para usuarios registrados.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
exit;
}
$now = time();
if($now > $_SESSION['expire']) {

session_destroy();

echo "Su sesion a terminado,

<a href='login.html'>Necesita Hacer Login</a>";

exit;

}

?>

<!DOCTYPE html>

<html lang="en">
<head>

<title>Panel de Control</title>

</head>
 
<body>

<h1>Panel de Control</h1>
<?php

include("conexion.php");
$con= conexion();
$sesion = $_SESSION['email'];
$query = "SELECT * FROM usuarios WHERE email='$sesion'";
	$resultado = mysqli_query($con ,$query);
	$datoRol = mysqli_fetch_array($resultado);
	//echo $datoRol[password];
		/*echo "<tr>";
		echo "<td> $datoRol[Rol]</td>";
		echo "</tr>";
		*/

		if ($datoRol[Rol]=="Lectura") {
			
			
        header('Location: vistaLecturainventario');
		session_start();
		unset ($SESSION['email']);

		session_destroy();
		//header('Location: login.html');
			
		}
		elseif($datoRol[Rol]=='LYC'){
			header('Location: vistaLecturaYCreacion.html');
			

		session_start();
		unset ($SESSION['email']);
		session_destroy();
		header('Location: login.html');
		}
 		elseif ($datoRol[Rol]=='LCYEd') {
 			header('Location: VistaLCYEdProdProvYBienes.html');
			

		session_start();
		unset ($SESSION['email']);
		session_destroy();
		//header('Location: login.html');
 		}

 		elseif ($datoRol[Rol]=='LCEdyE') {
 			header('Location: VistaAdministradorDB.html');
			

		session_start();
		unset ($SESSION['email']);
		session_destroy();
		//header('Location: login.html');
 		}


 
?>

<br><br>

<a href=logout.php>Cerrar Sesion X </a>

</body>

</html>

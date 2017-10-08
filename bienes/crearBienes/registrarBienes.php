<?php

	$conexion = mysqli_connect("localhost", "root", "", "loginphp");

 



//recibir los datos y guardar en las variables
$id_bienes=$POST['id_bienes'];	
$descripcion= $_POST['descripcion'];
$tipo= $_POST['tipo'];



//crud insertar
$insertar = "INSERT INTO bienes(descripcion, tipo) VALUES ('$descripcion', '$tipo')";


//verificar que no hay productos con el mismo codigo
$verificar_codigo= mysqli_query($conexion, "SELECT * FROM bienes WHERE id_bienes = '$id_bienes'");
if( mysqli_num_rows($verificar_codigo)>0){
	echo '<script>
	alert("El bien ya está registrado");
	window.history.go(-1);
	</script>';
	exit;
}




//Ejecutar crud insertar
$resultado = mysqli_query($conexion, $insertar);
if (!$resultado){
	echo 'error al registrarse';
}else{
	echo '<script>
	alert("registro exitoso");
	window.history.go(-1);
	</script>';
}
//cerrar la conexion
mysqli_close($conexion);

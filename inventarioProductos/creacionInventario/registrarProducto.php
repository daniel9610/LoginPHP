
<?php

	$conexion = mysqli_connect("localhost", "root", "", "loginphp");

 



//recibir los datos y guardar en las variables
$codigo= $_POST['codigo_unico'];
$idBienes= $_POST['id_bienes'];
$ubicacion= $_POST['ubicacion'];
$fechaIngreso= $_POST['fecha_ingreso'];
$idResponsable= $_POST['id_responsable'];


//crud insertar
$insertar = "INSERT INTO inventario(codigo_unico, id_bienes, ubicacion, fecha_ingreso, id_responsable) VALUES ('$codigo', '$idBienes', '$ubicacion', '$fechaIngreso', '$idResponsable')";


//verificar que no hay productos con el mismo codigo
$verificar_codigo= mysqli_query($conexion, "SELECT * FROM inventario WHERE codigo_unico = '$codigo'");
if( mysqli_num_rows($verificar_codigo)>0){
	echo '<script>
	alert("El producto ya está registrado");
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


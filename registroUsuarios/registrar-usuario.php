<?php


	$conexion = mysqli_connect("localhost", "root", "", "loginphp");



//recibir los datos y guardar en las variables
$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$email= $_POST['email'];
$Genero= $_POST['Genero'];
$password= $_POST['password'];
$Rol= $_POST['Rol'];

//crud insertar
$insertar = "INSERT INTO usuarios(nombres, apellidos, email, Genero, password, Rol) VALUES ('$nombres', '$apellidos', '$email', '$Genero', '$password', '$Rol')";


//verificar que no hay usuarios con el mismo correo
$verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");
if( mysqli_num_rows($verificar_correo)>0){
	echo '<script>
	alert("El usuario ya está registrado");
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


<?php

	$conexion = mysqli_connect("localhost", "root", "", "loginphp");

 



//recibir los datos y guardar en las variables
$nroOrden= $_POST['nro_orden'];
$ruc= $_POST['ruc'];
$razonSocial= $_POST['razon_social'];
$fechaOrden= $_POST['fecha_orden'];
$montoTotal= $_POST['monto_total'];
$fechaEntrega= $_POST['fecha_entrega'];

//crud insertar
$insertar = "INSERT INTO proveedor(nro_orden, ruc, razon_social, fecha_orden, monto_total, fecha_entrega) VALUES ('$nroOrden', '$ruc', '$razonSocial', '$fechaOrden', '$montoTotal', '$fechaEntrega')";


//verificar que no hay productos con el mismo codigo
$verificar_codigo= mysqli_query($conexion, "SELECT * FROM proveedor WHERE nro_orden = '$nroOrden'");
if( mysqli_num_rows($verificar_codigo)>0){
	echo '<script>
	alert("El proveedor ya está registrado");
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


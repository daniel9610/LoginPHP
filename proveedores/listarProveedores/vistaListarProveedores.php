<html>
<html>
<head>
	<title>visualizar proveedores </title>
</head>
<body>
<div>
<fieldset>
<legend> lista proveedores </legend>
<div>
<?php
	include("Lectura_proveedores.php");
	$Con = new Lectura_proveedor();
	$Con->recuperarDatos();
?>
</div>
</fieldset>
</div>
</body>
</html>
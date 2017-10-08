<html>
<html>
<head>
	<title>visualizar inventario </title>
</head>
<body>
<div>
<fieldset>
<legend> inventario recuperado </legend>
<div>
<?php
	include("Lectura_inventario.php");
	$Con = new Lectura_inventario();
	$Con->recuperarDatos();
?>
</div>
</fieldset>
</div>
</body>
</html>
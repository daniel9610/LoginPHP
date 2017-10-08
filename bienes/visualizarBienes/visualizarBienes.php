<html>
<html>
<head>
	<title>visualizar bienes </title>
</head>
<body>
<div>
<fieldset>
<legend> lista bienes </legend>
<div>
<?php
	include("lectura_bienes.php");
	$Con = new Lectura_bienes();
	$Con->recuperarDatos();
?>
</div>
</fieldset>
</div>
</body>
</html>
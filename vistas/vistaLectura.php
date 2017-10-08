<html>
<html>
<head>
	<title>Vista Lectura</title>
</head>
<body>
<div>
<fieldset>
<legend> datos recuperados </legend>
<div>
<?php
	include("cnDB.php");
	$Con = new cnDB();
	$Con->recuperarDatos();
?>
</div>
</fieldset>
</div>
</body>
</html>
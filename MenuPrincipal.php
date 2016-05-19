<?php
session_start();
$_SESSION['login_user']= $_POST["login"];
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/PrincipalCSS.css" />
	<meta charset="UTF-8">
	<title>Menú Principal</title>
</head>
<body>
	<div id="Benvingut">
		<h2><?php echo $_SESSION['login_user'];?></h2>
	</div>
	
	<div id="menuP">
		
		<form action="GestioAlumnes.php">
    		<input type="submit" value="Gestio Alumnes">
		</form>
		
		<form action="GestioProves.php">
    		<input type="submit" value="Gestio Proves">
		</form>
		
		<form action="ConsultarGrafics.php">
    		<input type="submit" value="Consultar Grafics">
		</form>
		
		<form action="index.php">
    		<input type="submit" value="Sortir">
		</form>
	</div>	
</body>
</html>
<?php
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/PrincipalCSS.css" />
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/popup.js" ></script>
	<meta charset="UTF-8">
	<title>Inserir Alumne</title>
</head>
<body>
	<div id="inseriralumne">
		<form action="" method="post">
			<label for="dni">DNI: </label> <input id="right" type="text" name="dni" value="">
	        <label for="nom">Nom: </label> <input type="text" name="nom" value="">
	        <label for="cognom">Cognom: </label> <input type="text" name="cognom" value="">
	        <label for="curs">Curs: </label> <input type="text" name="cognom" value=""> 
	        <label for="telefon">telèfon: </label> <input type="text" name="telefon" value="">
	        <label for="mobil">Mòbil: </label> <input type="text" name="mobil" value="">
	        <label for="mobil2">Mòbil del Pare/Mare: </label> <input type="text" name="mobil2" value="">
	        <label for="email">Email: </label> <input type="text" name="email" value="">
        	<input id="close_insert" type="submit" name="commit" value="Insertar">
		</form>
	</div> 
</html>
<?php
session_destroy();
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/PrincipalCSS.css" />
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<div id="Benvingut"><h2>Login</h2></div>
	
	<div id="menuL">
		<form id="login" action="MenuPrincipal.php" method="POST">
			<input type="text" name="login" value="" placeholder="Usuari o Email">
        	<input type="password" name="password" value="" placeholder="Password">
        	<input id="ButtonL" type="submit" name="commit" value="Login">
		</form> 
	</div>
</body>
</html>
<?php

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/PrincipalCSS.css" />
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/TabJS.js" ></script>
	<meta charset="UTF-8">
	<title>Gestió Alumnes</title>
</head>
<body>
	<div class="upper"><h1>Gestió Alumnes</h1></div>
	<div id="container">
		<ul>
			<li><a href="#">ESO 1</a></li>
			<li><a href="#">ESO 2</a></li>
			<li><a href="#">ESO 3</a></li>
			<li><a href="#">ESO 4</a></li>
		</ul>
	</div>
	<div id="containerCurs">
		<div id="westmenu">
			<button id="buttonwest" onclick="">
				<h5>Insertar Alumnes</h5>
			</button>
			<button id="buttonwest" onclick="">
				<h5>Esborrar Alumnes</h5>
			</button>
			<button id="buttonwest" onclick="">
				<h5>Modificar Alumnes</h5>
			</button>
			<button id="buttonwest" onclick="">
				<h5>Sortir</h5>
			</button>
		</div>
		<iframe src="BdTable.php"></iframe>
	</div>
</body>
</html>	
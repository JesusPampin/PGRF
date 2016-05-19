<?php

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/PrincipalCSS.css" />
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/TabJS.js" ></script>
	<script src="javascript/BaseDades.js" ></script>
	<script src="javascript/popup.js" ></script>
	<meta charset="UTF-8">
	<title>Gestió Alumnes</title>
</head>
<body>
	<div id="fileread">
		<form action="php/upload.php" method="post" enctype="multipart/form-data">
    		<input type="file" name="fileToRead" id="fileToRead">
    		<input type="submit" value="Insertar" name="submit">
		</form>
	</div>
	<div id="inseriralumne">
		<form id="insert" onsubmit="return InsertAlumne()" method="POST">
			<div><label for='dni'>DNI: </label><input id='formdni' type='text' name='dni' value=''></div>
        	<div><label for='nom'>Nom: </label> <input id='formnom' type='text' name='nom' value=''></div>
			<div><label for='cognom'>Cognom: </label> <input id='formcognom' type='text' name='cognom' value=''></div>
			<div><label for='sexe'>Sexe: </label> <input id='formsexe' type='text' name='sexe' value=''></div>
			<div><label for='curs'>Curs: </label> <input type='text' name='curs' value=''></div>
			<div><label for='grup'>Grup: </label> <input type='text' name='grup' value=''></div>
			<input type="submit" name="commit" value="Insertar">
		</form>
	</div>
	<div id="esborraralumne">
		<form id="selec" onsubmit="return SelecAlumne()" method="POST">
			<div><label for="dni">DNI: </label> <input type="text" name="dni" id="formdni" value=""></div>
        	<input type="submit" name="commit" value="Buscar">
		</form>
		<div id="AlumSelec"></div>
		<div id="hidden">
			<form id="erase" onsubmit="return EsborrarAlumne()" method="POST">
				<p>¿Confirmar para borrar el siguiente registro?</p>
	        	<input type="submit" name="commit" value="Borrar">
			</form>
		</div>
	</div>
	<div id="modificaralumne">
		<form id="selec" onsubmit="return SelecAlumneMod()" method="POST">
			<div><label for="dni">DNI: </label> <input type="text" name="dni" id="formdni" value=""></div>
        	<input type="submit" name="commit" value="Buscar">
		</form>
		<div id="formmod">
		</div>
		<div id="AlumSelecMod"></div>
		<div id="hiddenmod">
			<form id="modify" onsubmit="return ModificarAlumne()" method="POST">
				<p>¿Confirmar el cambio en el registro?</p>
	        	<input type="submit" name="commit" value="Aceptar">
			</form>
		</div>
	</div>
	<div class="upper"><h1>Gestió Alumnes</h1></div>
	<div id="container">
		<ul>
			<li><a href="#" onclick="ESO1()">ESO 1</a></li>
			<li><a href="#" onclick="ESO2()">ESO 2</a></li>
			<li><a href="#" onclick="ESO3()">ESO 3</a></li>
			<li><a href="#" onclick="ESO4()">ESO 4</a></li>
			<li><a href="#" onclick="BATX()">Batxillerat</a></li>
		</ul>
	</div> 
	<div id="containerCurs">
		<div id="westmenu">
			<button id="buttonwest" onclick="popupinsert()">
				<h5>Insertar Alumnes</h5>
			</button>
			<button id="buttonwest" onclick="popupcsv()">
				<h5>Insertar per CSV</h5>
			</button>
			<button id="buttonwest" onclick="popuperase()">
				<h5>Esborrar Alumnes</h5>
			</button>
			<button id="buttonwest" onclick="popupmodify()">
				<h5>Modificar Alumnes</h5>
			</button>
			<button id="buttonwest" onclick="">
				<h5>Sortir</h5>
			</button>
		</div>
		<div id="CURS">
			<table>
				<tr>
					<th>Nom</th>
					<th>Cognom</th>
					<th>Sexe</th>
					<th>Curs</th>
					<th>Grup</th>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>	
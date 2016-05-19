<?php
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/PrincipalCSS.css" />
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/TabJP.js" ></script>
	<script src="javascript/BaseDades.js" ></script>
	<script src="javascript/popup.js" ></script>
	<meta charset="UTF-8">
	<title>Gestió Alumnes</title>
</head>
<body>
	<div class="upper"><h1>Gestió Proves</h1></div>
	<div id="container">
		<ul>
			<li><a href="#" onclick="ESO1()">ESO 1</a></li>
			<li><a href="#" onclick="ESO2()">ESO 2</a></li>
			<li><a href="#" onclick="ESO3()">ESO 3</a></li>
			<li><a href="#" onclick="ESO4()">ESO 4</a></li>
		</ul>
	</div> 
	<div id="containerCurs">
		<div id="westmenu">
			<button id="buttonwest" onclick="selecforprova()">
				<h5></h5>
			</button>
			<button id="buttonwest" onclick="">
				<h5></h5>
			</button>
			<button id="buttonwest" onclick="">
				<h5></h5>
			</button>
			<button id="buttonwest" onclick="">
				<h5>Sortir</h5>
			</button>
		</div>
		<div id="ESO">
			<table>
				<tr>
					<th colspan="4" id="blank"></th>
					<th colspan="3" id="comp">Comportament</th>
					<th id="resis">Resistencia</th>
					<th id="flexi">Flexibilitat</th>
					<th id="veloc">Velocitat</th>
					<th id="força">Força</th>
				</tr>
				<tr>
					<td id="falseth">Nom</td>
					<td id="falseth">Cognom</td>
					<td id="falseth">Altura</td>
					<td id="falseth">Pes</td>
					<td id="falseth">Equip</td>
					<td id="falseth">Tombarella</td>
					<td id="falseth">Dutxes</td>
					<td id="falseth">Test Cooper</td>
					<td id="falseth">Cames</td>
					<td id="falseth">100m</td>
					<td id="falseth">Llançament</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=pgrf user=postgres password=postgres");
if($_POST['action'] == 'ESO1') {
	$result = pg_query($dbconn, "SELECT dni,nom,cognom,sexe,curs,grup FROM alumnes WHERE grup LIKE 'ESO1%'");
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Sexe</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "</tr>";
	}
	echo "</table>";
}

if($_POST['action'] == 'ESO2') {
	$result = pg_query($dbconn, "SELECT dni,nom,cognom,sexe,curs,grup FROM alumnes WHERE grup LIKE 'ESO2%'");
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Sexe</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "</tr>";
	}
	echo "</table>";
}
if($_POST['action'] == 'ESO3') {
	$result = pg_query($dbconn, "SELECT dni,nom,cognom,sexe,curs,grup FROM alumnes WHERE grup LIKE 'ESO3%'");
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Sexe</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "</tr>";
	}
	echo "</table>";
}
if($_POST['action'] == 'ESO4') {
	$result = pg_query($dbconn, "SELECT dni,nom,cognom,sexe,curs,grup FROM alumnes WHERE grup LIKE 'ESO4%'");
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Sexe</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "</tr>";
	}
	echo "</table>";
}

if($_POST['action'] == 'BATX') {
	$result = pg_query($dbconn, "SELECT dni,nom,cognom,sexe,curs,grup FROM alumnes WHERE grup LIKE 'BATX1%'");
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Sexe</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "</tr>";
	}
	echo "</table>";
}

if($_POST['action'] == 'ESO1P') {
	$result = pg_query($dbconn, 
			"SELECT m.nom,m.cognom,a.altura,a.pes,a.equip, a.tombarella,a.dutxes,ac.nota 
			FROM matricula m,alumnes a,prova p,activitat ac 
			WHERE a.dni = m.dni AND p.nom_prova = ac.prova AND a.dni = ac.dni");
	echo "<table>";
	echo "<tr>";
	echo "<th colspan='4' id='blank'></th>";
	echo "<th colspan='3' id='comp'>Comportament</th>";
	echo "<th id='força'>Resistencia</th>";
	echo "<th id='resis'>Flexibilitat</th>";
	echo "<th id='veloc'>Velocitat</th>";
	echo "<th id='flexi'>Força</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='falseth'>Nom</td>";
	echo "<td id='falseth'>Cognom</td>";
	echo "<td id='falseth'>Altura</td>";
	echo "<td id='falseth'>Pes</td>";
	echo "<td id='falseth'>Equip</td>";
	echo "<td id='falseth'>Tombarella</td>";
	echo "<td id='falseth'>Dutxes</td>";
	echo "<td id='falseth'>Test Cooper</td>";
	echo "<td id='falseth'>Cames</td>";
	echo "<td id='falseth'>100m</td>";
	echo "<td id='falseth'>Llançament</td>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[7]</td>";
		echo "<td>$row[8]</td>";
		echo "<td>$row[9]</td>";
		echo "<td>$row[10]</td>";
		echo "</tr>";
	}
	echo "</table>";
}

if($_POST['action'] == 'ESO1PSelect') {
	$result = pg_query($dbconn, "SELECT m.nom,m.cognom,a.altura,a.pes,a.equip, a.tombarella,a.dutxes,ac.nota FROM matricula m,alumnes a,prova p,activitat ac WHERE a.dni = m.dni AND p.nom_prova = ac.prova AND a.dni = ac.dni");
	echo "<table>";
	echo "<tr>";
	echo "<th colspan='4' id='blank'></th>";
	echo "<th colspan='3' id='comp'>Comportament</th>";
	echo "<th id='força'>Resistencia</th>";
	echo "<th id='resis'>Flexibilitat</th>";
	echo "<th id='veloc'>Velocitat</th>";
	echo "<th id='flexi'>Força</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='falseth'>Provar</td>";
	echo "<td id='falseth'>Nom</td>";
	echo "<td id='falseth'>Cognom</td>";
	echo "<td id='falseth'>Altura</td>";
	echo "<td id='falseth'>Pes</td>";
	echo "<td id='falseth'>Equip</td>";
	echo "<td id='falseth'>Tombarella</td>";
	echo "<td id='falseth'>Dutxes</td>";
	echo "<td id='falseth'>Test Cooper</td>";
	echo "<td id='falseth'>Cames</td>";
	echo "<td id='falseth'>100m</td>";
	echo "<td id='falseth'>Llançament</td>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td><button id='forprova' onclick='SelectProva'><h6>Provar</h6></button></td>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[7]</td>";
		echo "<td>$row[8]</td>";
		echo "<td>$row[9]</td>";
		echo "<td>$row[10]</td>";
		echo "</tr>";
	}
	echo "</table>";
}

if($_POST['action'] == 'ESO2P') {
	$result = pg_query($dbconn, "SELECT m.nom,m.cognom,a.altura,a.pes,a.equip, a.tombarella,a.dutxes,ac.nota FROM matricula m,alumnes a,prova p,activitat ac WHERE a.dni = m.dni AND p.nom_prova = ac.prova AND a.dni = ac.dni");
	echo "<table>";
	echo "<tr>";
	echo "<th colspan='4' id='blank'></th>";
	echo "<th colspan='3' id='comp'>Comportament</th>";
	echo "<th id='força'>Força</th>";
	echo "<th id='resis'>Resistencia</th>";
	echo "<th id='veloc'>Velocitat</th>";
	echo "<th id='flexi'>Flexibilitat</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='falseth'>Nom</td>";
	echo "<td id='falseth'>Cognom</td>";
	echo "<td id='falseth'>Altura</td>";
	echo "<td id='falseth'>Pes</td>";
	echo "<td id='falseth'>Equip</td>";
	echo "<td id='falseth'>Tombarella</td>";
	echo "<td id='falseth'>Dutxes</td>";
	echo "<td id='falseth'>Test Cooper</td>";
	echo "<td id='falseth'>Cames</td>";
	echo "<td id='falseth'>100m</td>";
	echo "<td id='falseth'>Llançament</td>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[7]</td>";
		echo "<td>$row[8]</td>";
		echo "<td>$row[9]</td>";
		echo "<td>$row[10]</td>";
		echo "</tr>";
	}
	echo "</table>";
}

if($_POST['action'] == 'ESO3P') {
	$result = pg_query($dbconn, "SELECT m.nom,m.cognom,a.altura,a.pes,a.equip, a.tombarella,a.dutxes,ac.nota FROM matricula m,alumnes a,prova p,activitat ac WHERE a.dni = m.dni AND p.nom_prova = ac.prova AND a.dni = ac.dni");
	echo "<table>";
	echo "<tr>";
	echo "<th colspan='4' id='blank'></th>";
	echo "<th colspan='3' id='comp'>Comportament</th>";
	echo "<th id='força'>Força</th>";
	echo "<th id='resis'>Resistencia</th>";
	echo "<th id='veloc'>Velocitat</th>";
	echo "<th id='flexi'>Flexibilitat</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='falseth'>Nom</td>";
	echo "<td id='falseth'>Cognom</td>";
	echo "<td id='falseth'>Altura</td>";
	echo "<td id='falseth'>Pes</td>";
	echo "<td id='falseth'>Equip</td>";
	echo "<td id='falseth'>Tombarella</td>";
	echo "<td id='falseth'>Dutxes</td>";
	echo "<td id='falseth'>Test Cooper</td>";
	echo "<td id='falseth'>Cames</td>";
	echo "<td id='falseth'>100m</td>";
	echo "<td id='falseth'>Llançament</td>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[7]</td>";
		echo "<td>$row[8]</td>";
		echo "<td>$row[9]</td>";
		echo "<td>$row[10]</td>";
		echo "</tr>";
	}
	echo "</table>";
}

if($_POST['action'] == 'ESO4P') {
	$result = pg_query($dbconn, "SELECT m.nom,m.cognom,a.altura,a.pes,a.equip, a.tombarella,a.dutxes,ac.nota FROM matricula m,alumnes a,prova p,activitat ac WHERE a.dni = m.dni AND p.nom_prova = ac.prova AND a.dni = ac.dni");
	echo "<table>";
	echo "<tr>";
	echo "<th colspan='4' id='blank'></th>";
	echo "<th colspan='3' id='comp'>Comportament</th>";
	echo "<th id='força'>Força</th>";
	echo "<th id='resis'>Resistencia</th>";
	echo "<th id='veloc'>Velocitat</th>";
	echo "<th id='flexi'>Flexibilitat</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='falseth'>Nom</td>";
	echo "<td id='falseth'>Cognom</td>";
	echo "<td id='falseth'>Altura</td>";
	echo "<td id='falseth'>Pes</td>";
	echo "<td id='falseth'>Equip</td>";
	echo "<td id='falseth'>Tombarella</td>";
	echo "<td id='falseth'>Dutxes</td>";
	echo "<td id='falseth'>Test Cooper</td>";
	echo "<td id='falseth'>Cames</td>";
	echo "<td id='falseth'>100m</td>";
	echo "<td id='falseth'>Llançament</td>";
	echo "</tr>";
	while ($row = pg_fetch_row($result)) {
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[3]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td>$row[7]</td>";
		echo "<td>$row[8]</td>";
		echo "<td>$row[9]</td>";
		echo "<td>$row[10]</td>";
		echo "</tr>";
	}
	echo "</table>";
}


if($_POST['action'] == 'InsertAlumne') {
	parse_str($_POST['data'], $data);
	$dni = $data['dni'];
	$nom = $data['nom'];
	$cognom = $data['cognom'];
	$datanaix = $data['datanaix'];
	$email = $data['email'];
	$telefon = $data['telefon'];
	$mobil = $data['mobil'];
	$mobiltutor = $data['mobil2'];
	$curs = $data['curs'];
	$grup = $data['grup'];
	
	$result = pg_query("INSERT INTO alumne(dni,nom,cognom,data_naixement,email,telefon,mobil,mobil_tutor,curs,grup) VALUES ('$dni','$nom','$cognom','$datanaix','$email','$telefon','$mobil','$mobiltutor','$curs','$grup');");
	pg_close($dbconn);
}

if($_POST['action'] == 'SelecAlumneP') {
	parse_str($_POST['data'], $data);
	$dni = $data['dni'];
	$result = pg_query("SELECT m.nom,m.cognom,a.altura,a.pes,a.equip, a.tombarella,a.dutxes,ac.nota FROM matricula m,alumnes a,prova p,activitat ac WHERE a.dni = m.dni AND p.nom_prova = ac.prova AND a.dni = ac.dni AND dni = '$dni'");
	$row = pg_fetch_row($result);
	echo "<table>";
	echo "<tr>";
	echo "<th colspan='4' id='blank'></th>";
	echo "<th colspan='3' id='comp'>Comportament</th>";
	echo "<th id='força'>Força</th>";
	echo "<th id='resis'>Resistencia</th>";
	echo "<th id='veloc'>Velocitat</th>";
	echo "<th id='flexi'>Flexibilitat</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td id='falseth'>Nom</td>";
	echo "<td id='falseth'>Cognom</td>";
	echo "<td id='falseth'>Altura</td>";
	echo "<td id='falseth'>Pes</td>";
	echo "<td id='falseth'>Equip</td>";
	echo "<td id='falseth'>Tombarella</td>";
	echo "<td id='falseth'>Dutxes</td>";
	echo "<td id='falseth'>Test Cooper</td>";
	echo "<td id='falseth'>Cames</td>";
	echo "<td id='falseth'>100m</td>";
	echo "<td id='falseth'>Llançament</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "<td>$row[6]</td>";
	echo "<td>$row[7]</td>";
	echo "<td>$row[8]</td>";
	echo "<td>$row[9]</td>";
	echo "<td>$row[10]</td>";
	echo "</tr>";
	echo "</table>";
	pg_close($dbconn);
}

if($_POST['action'] == 'SelecAlumne') {
	parse_str($_POST['data'], $data);
	$dni = $data['dni'];
	$result = pg_query($dbconn, "SELECT dni,nom,cognom,sexe,curs,grup FROM alumnes WHERE dni = '$dni'");
	$row = pg_fetch_row($result);
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Sexe</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "</tr>";
	echo "</table>";
	pg_close($dbconn);
}

if($_POST['action'] == 'SelecAlumneMod') {
	parse_str($_POST['data'], $data);
	$dni = $data['dni'];
	$result = pg_query("SELECT * FROM alumne WHERE dni = '$dni'");
	parse_str($_POST['dataN'], $dataN);
	$row = pg_fetch_row($result);
	echo "<p>Registre actual</p>";
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Data Naixement</th>";
	echo "<th>Email</th>";
	echo "<th>Telèfon</th>";
	echo "<th>Mòbil</th>";
	echo "<th>Mòbil Tutor</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "<td>$row[2]</td>";
	echo "<td>$row[3]</td>";
	echo "<td>$row[4]</td>";
	echo "<td>$row[5]</td>";
	echo "<td>$row[6]</td>";
	echo "<td>$row[7]</td>";
	echo "<td>$row[8]</td>";
	echo "<td>$row[9]</td>";
	echo "</tr>";
	echo "</table>";
	pg_close($dbconn);
	echo "<p>Registre nou</p>";
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Data Naixement</th>";
	echo "<th>Email</th>";
	echo "<th>Telèfon</th>";
	echo "<th>Mòbil</th>";
	echo "<th>Mòbil Tutor</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "</tr>";
	echo "<tr>";
	for ($x = 0;$x == $dataN.lenth ; $x++){
		echo "<td>$dataN[$x]</td>";
	}
	echo "</tr>";
	echo "</table>";
}

if($_POST['action'] == 'EsborrarAlumne') {
	parse_str($_POST['data'], $data);
	$dni = $data['dni'];
	
	$result = pg_query("DELETE FROM alumnes WHERE dni = '$dni'");
	
	pg_close($dbconn);
}

if($_POST['action'] == 'ModificarAlumne') {
	parse_str($_POST['data'], $data);
	$dni = $data['dni'];
	$nom = $data['nom'];
	$cognom = $data['cognom'];

	$result = pg_query("UPDATE alumne SET nom='$nom',cognom='$cognom' where dni='$dni'");

	pg_close($dbconn);
}

if($_POST['action'] == 'Form' ) {
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Data Naixement</th>";
	echo "<th>Email</th>";
	echo "<th>Telèfon</th>";
	echo "<th>Mòbil</th>";
	echo "<th>Mòbil Tutor</th>";
	echo "<th>Curs</th>";
	echo "<th>Grup</th>";
	echo "<form id='modal' onsubmit='return ConModAlumne()' method='POST'>";
	echo "<div><label for='nom'>Nom: </label> <input id='formnom' type='text' name='nom' value=''></div>";
	echo "<div><label for='cognom'>Cognom: </label> <input id='formcognom' type='text' name='cognom' value=''></div>";
	echo "<div><label for='email'>Email: </label> <input type='text' name='email' value=''></div>";
	echo "<div><label for='datanaix'>Data Naixement: </label><input type='date' name='datanaix' value=''></div>";
	echo "<div><label for='telefon'>Telèfon: </label> <input type='text' name='telefon' value=''></div>";
	echo "<div><label for='mobil'>Mòbil: </label> <input type='text'' name='mobil' value=''></div>";
	echo "<div><label for='mobil2'>Mòbil tutor: </label> <input type='text' name='mobil2' value=''></div>";
	echo "<div><label for='curs'>Curs: </label> <input type='text' name='curs' value=''></div>";
	echo "<div><label for='grup'>Grup: </label> <input type='text' name='grup' value=''></div>";
	echo "<input type='submit' name='commit' value='Confirmar'>";
	echo "</form>";
}
?>
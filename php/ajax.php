<?php
if($_POST['action'] == 'call_this') {
	$dbconn = pg_connect("host=localhost port=5432 dbname=pgrf user=postgres password=postgres");
	if (! $dbconn){

		echo "<h2 align='center'>ERROR: Ta fallando</h2>";

		exit;
	}
	else {
		echo "<h2> Ta funcionando</h2>";
	}
}

if($_POST['action'] == 'ESO1') {
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Edat</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>55555555S</td>";
	echo "<td>Jesús</td>";
	echo "<td>Pampín</td>";
	echo "<td>23</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>66666666O</td>";
	echo "<td>Kevin</td>";
	echo "<td>Anaya</td>";
	echo "<td>22</td>";
	echo "</tr>";
	echo "</table>";
	
}
if($_POST['action'] == 'ESO2') {
	echo "<table>";
	echo "<tr>";
	echo "<th>DNI</th>";
	echo "<th>Nom</th>";
	echo "<th>Cognom</th>";
	echo "<th>Edat</th>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>77777777S</td>";
	echo "<td>Adrian</td>";
	echo "<td>Boluda</td>";
	echo "<td>19</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>11111111P</td>";
	echo "<td>Iana</td>";
	echo "<td>Amigo</td>";
	echo "<td>20</td>";
	echo "</tr>";
	echo "</table>";
}
?>
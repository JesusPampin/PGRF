<?php
if($_POST['action'] == 'call_this') {
	function connectdb() {
		$dbconn = pg_connect("host=localhost port=5432 dbname=pgrf user=postgres password=postgres");
		if (! $dbconn){
	
			echo "<h2 align='center'>ERROR: Ta fallando</h2>";
	
			exit;
		}
		else {
			echo "<h2> Ta funcionando</h2>";
		}
	}
}

?>
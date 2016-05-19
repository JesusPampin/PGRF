<?php
header("Location: ../GestioAlumnes.php");
$dbconn = pg_connect("host=localhost port=5432 dbname=pgrf user=postgres password=postgres");
$target_dir = "/var/www/ProjecteGRF/uploads/";
$target_file = $target_dir . basename($_FILES["fileToRead"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
	$finfo = finfo_open(FILEINFO_MIME_TYPE);
	$tmp = $_FILES["fileToRead"]["tmp_name"];
	$mime = finfo_file($finfo,$tmp);
	$mimesAccept = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
	if(in_array($mime,$mimesAccept)){
		move_uploaded_file($tmp, $target_file);
		$result = pg_query($dbconn, "COPY alumnes FROM '$target_file' DELIMITER ',' CSV;");
		pg_close($dbconn);
		unlink($target_file);
	}
	else {
	}
}
exit();
?>
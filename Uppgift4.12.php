<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>File explorer</title>
	</head>
	<body>
	<form method="POST">
		<input type="text" name="file" size="50"><br>
		<input type="submit" value="Skicka">
	</form>
<?php
if(isset($_POST['file'])) {
	
$tal=$_POST['file'];


$handle=opendir("$tal");

while (false !==($entry = readdir($handle))) {
	echo "$entry";
	if(is_dir("$tal/$entry")) {
	
	} else {
		$filename = "$tal/$entry";
		$file=$filename;
	
	
	echo htmlentities(filesize($filename) .  '  bytes');
	?>  <a href="https://Uppgift4.13" </a> <?php
	echo "[fil] <br>";

}}  closedir($handle);}

?>
</body>
</html>
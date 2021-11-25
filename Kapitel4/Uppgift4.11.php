<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Mapp explorer</title>
	</head>
	<body>
	<form method="POST">
		Nummer1:<input type="number" name="nummer1" size="50"><br>
		Nummer2:<input type="number" name="nummer2" size="50"><br>
		<input type="submit" value="Skicka">
	</form>
<?php
if(isset($_POST['nummer1'])) {
$nummer1=$_POST['nummer1'];
$nummer2=$_POST['nummer2'];




if ($nummer1%$nummer2==0) {
	echo "$nummer1 är delbart med $nummer2";
	
}else {
	echo "$nummer1 är inte delbart med $nummer2";
}
}
?>
</body>
</html>
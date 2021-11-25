<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Uppgift1.6</title>
	</head>
	<body>
<?php

$namn=$_POST['namn'];
$epost=$_POST['epost'];


echo "Hej $namn<br>";

echo "Kul att du är intresserad av att få veta mera om söderhavsresor, vi kommer skicka ett mail till dig på följande adress: $epost<br>";

echo "På återhörande<br>";

echo "/Söderhavsresor";

?>

	</body>
</html>
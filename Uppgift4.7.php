<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Date</title>
	</head>
	<form method="POST">
		Dagar:<input type="text" name="date" size="50" pattern="[0-9]{1,9}" required><br>
		Datum:<input type="date" name="fodelse" size="50" required><br>
		<input type="submit" value="Skicka">
	</form>
<?php

$idag=date("j F Y");

$datetime1=new DateTime("$idag");


if(isset($_POST['date'])) {
	
$varde1=$_POST["date"];

$fodelse=$_POST["fodelse"];

echo "Du valde " . $fodelse;
echo "<br>";

$idagär=date("d-m-Y");
echo "dagens datum är $idagär<br>";



$date=new DateTime ("$fodelse");

$date->modify ("+$varde1 days");

$datetime2=new DateTime("$fodelse");

$interval=$datetime2->diff($datetime1);

echo "Skillnaden är " . $interval->format('%a days');

echo "<br>";

echo  $date ->format ('d-m-Y');

echo " är när du blev " . $varde1 . " dagar  gammal";


}

?>
</body>
</html>
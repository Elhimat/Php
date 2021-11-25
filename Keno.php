<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Keno</title>
	</head>
	<body>
		<form method="POST">
		Mata in 11 tal(mellan 1 och 70) separerade med ETT mellanslag!
		<input type="text" name="minaTal" size="25"><br>
		<input type="submit" value="SKicka!"><br>
	</form>
	</body>
</html>




<?php

if (isset($_POST['minaTal'])) {
//skapa en array av de inmatade talen
$minaTal=explode(" ", $_POST['minaTal']);
//Felkontroll
$ok=true;
if (count($minaTal)!==11) { //Det är inte 11 tal i arrayen
	echo "Det ska vara 11 tal";
	$ok=false;
}else {
	for($i=0;$i<11;$i++) { //Kolla att det är heltal mellan 1 0ch 70
		if(!is_int((int)$minaTal[$i]) || $minaTal[$i]>70 || $minaTal[$i]<1) {
			echo "Det ska vara 11 tal mellan 1 och 70";
			$ok=false;
			break;
		}
	}
}
//inmatad sträng är OK
if ($ok) {
$tal=[];
//Slumpa fram 20 tal mellan 1 och 70 
while(count ($tal)<20) {
	$rnd=rand(1,70);
		$tal[$rnd]=1;

}
//sortera talen
ksort($tal, SORT_NUMERIC);
//skriv ut talen
echo "De 20 slumpade talen är ...<br>";
foreach($tal as $key=>$value)  {
	echo "$key ";
}
//sortera de inmatade talen
sort($minaTal, SORT_NUMERIC);
//skriv ut dem
echo "<br>Dina tal var ...<br>";
$antalRatt=0;
foreach($minaTal as $value) {
	//kontrollera om ditt tal finns bland de slumpade
	if(array_key_exists($value, $tal)) {
		echo "<b>$value</b> ";
		$antalRatt++;
	} else {
	    echo "$value ";
	}
}
echo "<br>Du fick $antalRatt rätta tal!";
}}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lotto</title>
	</head>
	<body>
		<form method="POST">
		Välj hur många rader du vill ha:<input type="number" name="rader" requiered min=0 size="25"><br>
		Gissa tal:<input type="text" name="minaTal" size="25"><br>
		<input type="submit" value="SKicka!"><br>
	</form>
	</body>
</html>




<?php

if (isset($_POST['minaTal'])) {
$minaTal=$_POST['minaTal'];
$rader=$_POST['rader'];




//skapa en array av de inmatade talen
$minaTal=explode(" ", $_POST['minaTal']);
//Felkontroll
$ok=true;
$l="$rader"*7;
if (count($minaTal)!==$l) { //Det är inte 11 tal i arrayen
	echo "Det ska vara $l tal";
	$ok=false;
}else {
	for($i=0;$i<$l;$i++) { //Kolla att det är heltal mellan 1 0ch 70
		if(!is_int((int)$minaTal[$i]) || $minaTal[$i]>40 || $minaTal[$i]<1) {
			echo "Det ska vara tal mellan 1 och 40";
			$ok=false;
			break;
		}
	}
}
//inmatad sträng är OK
if ($ok) {
$d=0;
$c=1;
$tal=[];
$b=1;
//Slumpa fram 20 tal mellan 1 och 70 
while(count ($tal)<7) {
	$rnd=rand(1,40);
		$tal[$rnd]=1;

}
//sortera talen
ksort($tal, SORT_NUMERIC);
//skriv ut talen
echo "<br>Dina slumpade tal är ...<br>";
$antalRatt=0;
foreach($minaTal as $value)  {
	if (array_key_exists($value,$tal))	{
		echo "$value ";
		$antalRatt++;
		$d++;
		if ($d%7==0) {
		
echo "<br>";		
}
	}else{
	
echo "$value ";
$d++;
if ($d%7==0) {
	
echo "<br";
}}

} echo "<br>Lottorad $c...<br>";
foreach($tal as $key=>$value) {
echo "$key ";}
while ($rader!=1) {
	
	$tal=[];
	$rader--;
	$c++;
while(count($tal)<7) {
	$rnd=rand(1,40);
		$tal[$rnd]=1;
}
ksort($tal, SORT_NUMERIC);
echo "<br>Lottorad $c..<br>";
foreach($tal as $key=>$value) {
	echo "$key ";
}

$antalRatt=0;
foreach($minaTal as $value) {
	if(array_key_exists($value,$tal)) {
		$antalRatt++;
	}
}
}}}
?>
<?php
declare (strict_types=1);
// Ange ett standardvärde
$artal=date("Y");

//kontrollera om vi fått någon indata
if(isset($_GET['artal'])) {
	//ta hand om indata om de är ett heltal
	$artal=filter_input(INPUT_GET, 'artal', FILTER_VALIDATE_INT);
	//Sätt årets år om talet är utanför angivna gränser
	if ($artal>2050  ||  $artal<1988)  {
		$artal=date("Y");
	}

}


?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Tjejvasan (4.23)</title>
	</head>
	<body>
		<form method="GET">
		 Ange år:<input type="number" value="<?= $artal;?>" name="artal"  max=2050 min=1988 size="50"><br>
		<input type="submit" value="Skicka">
		</form>
		<p>Tjejvasan genomförs de närmaste 5 åren följande datum:
		<?php
			for($i=0;$i<5;$i++) {
				echo $artal+$i  . " den " . Tjejvasan ($artal+$i) . "<br>";
			}
		
		
		?>
		</P>
	</body>
</html>
<?php
//funktion för att beräkna datum för tjejvasan.
//Sträng med datum returneras
function tjejvasan (int $ar) :string {
	//HItta datum för vanliga vasaloppet
	$datum=strtotime("First sunday of march $ar");
	//TJejvasan går lördagen veckan före vanliga vasaloppet
	$datum=strtotime("-8 days", $datum);
	//returnera det funna datumet
	return date("Y-m-d", $datum);
}
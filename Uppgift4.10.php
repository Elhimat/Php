<?php
declare (strict_types=1);
//ta emot uppgifter från fomuläret
$namn=filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);
$hidden=filter_input(INPUT_POST, "hidden", FILTER_SANITIZE_STRING);

if($hidden=='') {
//skapa en sammanfogad sträng med värdena från formuläret
$hidden=$namn . "";
} else {
	 $hidden=$hidden . "|" . $namn;
}
// Skapa en array
$namnArray=explode("|", $hidden);


//sortera arrayen
sort($namnArray, SORT_LOCALE_STRING);
?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>sortera namn</title>
	</head>
	<body>
		<h1>Sortera Namn</h1>
		<form method="POST">
			Ange namn: <input type="text" name="namn"><br>
			<input type="submit" value="spara"><br>
			<input type="hidden" name="hidden" size="100" value="<?= $hidden; ?>">
		</form>
		<?php 
			//Skriv ut namnen på en egen rad2deg
			foreach($namnArray as $n){
				echo "$n<br>";
			}
		?>
	</body>
</html>
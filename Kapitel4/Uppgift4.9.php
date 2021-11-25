<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Vasaloppet</title>
	</head>
	<form method="POST">
		År:<input type="number" name="date" min=1922 required ><br>
		<input type="submit" value="Skicka">
	</form>
<?php
if(isset($_POST['date'])) {
	
$i=$_POST['date'];
//tar fram året man skrev in och plussar på 4 år till.
$slut = ($i+4);

for ($j=$i;$j<=$slut;$j++) {
//Tar fram första söndagen av mars på de åren man skrev in. 
$datumet=date("d-m-Y", strtotime("first sunday of march $j"));
//skriver ut vasaloppet det år man skrev in i textfältet och 4 år frammåt.
echo "$datumet <br>";
}}
?>
</body>
</html>
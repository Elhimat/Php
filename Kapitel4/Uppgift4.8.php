<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Date easter</title>
	</head>
	<form method="POST">
		År:<input type="text" name="date" size="50" ><br>
		<input type="submit" value="Skicka">
	</form>
<?php

if(isset($_POST['date'])) {
	
$varde1=$_POST["date"];

function get_easter_datetime($year) {
    $base = new DateTime("$year-03-21");
    $days = easter_days($year);

    return $base->add(new DateInterval("P{$days}D"));
}

foreach (range(2000, 2030) as $year) {
    printf("Easter in %d is on %s\n",
           $year,
           get_easter_datetime($year)->format('F j'));
}

}

?>
</body>
</html>
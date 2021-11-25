<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Date</title>
	</head>
	<form method="POST">
		Text: <input type="text" name="date" size="50"><br>
		<input type="submit" value="Skicka">
	</form>
<?php
if(isset($_POST['date'])) {
	
$varde1=$_POST["date"];

$time=date("l", strtotime($varde1));

echo "$time";

}

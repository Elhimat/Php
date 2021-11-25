<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Uppgift4.2</title>
	</head>
	<form method="POST">
		Text: <input type="text" name="text" size="100"><br>
		<input type="submit" value="Skicka">
	</form>
	<pre>
<?php

$text=$_POST["text"];

$text=filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);

$text1=mb_strtolower($text);

$text2=ucwords($text1);

$text3=lcfirst($text2);


$text4=str_replace("-", "", $text3);


echo "$text4";  


?>
</html>
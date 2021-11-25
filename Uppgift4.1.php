<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Jämför inmatade värden</title>
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

$andra=strrev($text1);

$text2=str_replace(" ", "", $text1);

$andra1=str_replace("-", "", $andra);


if($andra1==$text2) {
            echo "$text är ett palindrom";
        } else {
            echo "$text är inget palindrom";
        }
?>
</html>
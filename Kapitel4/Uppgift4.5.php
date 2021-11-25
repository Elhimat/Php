<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Kryptering</title>
	</head>
	<form method="POST">
		Kryptering: <input type="text" name="text" size="50"><br>
		Dekryptering: <input type="text" name="text2" size="50"><br>
		<input type="submit" value="Skicka">
	</form>
<?php
if(isset($_POST['text'])) {
	
$text=$_POST["text"];

$text2=$_POST["text2"];


function Cipher($ch, $key)
{
	if (!ctype_alpha($ch))
		return $ch;

	$offset = ord(ctype_upper($ch) ? 'A' : 'a');
	return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
}

function Encipher($input, $key)
{
	$output = "";

	$inputArr = str_split($input);
	foreach ($inputArr as $ch)
		$output .= Cipher($ch, $key);

	return $output;
}

function Decipher($input, $key)
{
	return Encipher($input, 26 - $key);
}
$cipherText = Encipher($text, 1);
echo "Krypterat: $cipherText<br>";

$cipherText = Encipher($text2, 1);
$decipherText = Decipher($cipherText, 2);

echo "Dekryptering:$decipherText";


} 
?>
</html>
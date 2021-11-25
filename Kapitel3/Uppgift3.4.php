<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<title>Uppgift 3.4</title>
		<link rel="stylesheet" href="css/forloop.css">
	</head>																																											

<?php 

for($i=1;$i<=100;$i++)  {


if ($i%10==1) {
	echo "<br>"; 
}	
	if ($i%7==0) {
	if ($i%2==0) {
	if ($i%5==0) { ?>
<span><strong><em><i><?php echo "$i  "?></i></strong></em></span>
<?php }else { ?>
<span><em><?php echo "$i " ?></em></span>
<?php }}
elseif ($i%5==0) { 
	if ($i%2==0) { ?>
	<span><strong><em><i><?php echo "$i "  ?></i></em></strong></span>
<?php }
else{ ?>
<span><strong><i><?php echo "$i " ?></i></strong></span><?php
}} else { ?>
<span><i><?php echo "$i " ?></i></span>
<?php
}}
	elseif 	($i%5==0) {
	if 	($i%2==0)  { ?>
<span><em><strong><?php echo "$i "  ?></strong></em></span><?php

} else { ?>
	<span><strong><?php  echo "$i " ?></strong></span> <?php
}} elseif ($i%2==0) { ?>
<span><em><?php echo "$i " ?></em></span><?php
}
else {
echo "$i ";
}}
?>
</html>
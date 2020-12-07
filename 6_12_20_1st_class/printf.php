<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>
</head>
<body>
	<h2>PHP Printf</h2>
	
	<?php
	
	printf("%d Month and Today is December : %d",12,6);
	printf("<br>");

	printf("%d bottles of tonic water cost $%f",100,43.3);
	printf("<br>");

	printf("%d bottles of tonic water cost $%.2f",100,43.3); //only 2 float
	printf("<br>");
	?>

	<h2>PHP Sprintf</h2> 

	<?php

	$cost = sprintf("%d bottles of tonic water cost $%.2f",100,43.3);
	print $cost;


	?>
</body>
</html>
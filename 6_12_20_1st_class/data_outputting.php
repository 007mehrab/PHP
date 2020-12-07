<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	  $title = "<h1> Outputting content</h1>";
	  $body = "<p> The content of the Paragraph.....</p>";

	  echo $title, $body;
	?>

	<?php
	  $a = 5;
	  // echo "$a_abc<br/>"; //there is no value $a_abc this will not show the value of $a
	 
	  echo "{$a}_abc<br/>";  //now $a is isolate as a variavle and the output will be as expected
	?>
	<?php
	$a = "This value is :";
	  $b = 5;
	  echo $a,$b;
	?>
</body>
</html>
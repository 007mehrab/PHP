<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">

	<input type="text" name="guess"><br>
	<input type="submit" value="Submit">

   </form>
</body>
</html>

<?php

  $secratNumber = 443;
  if ($_POST['guess'] == $secratNumber){
    echo "Congratulation";
  }
  else{
  	echo "Sorry!";
  }

?>
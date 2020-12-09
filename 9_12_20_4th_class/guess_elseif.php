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

   </form><br>
</body>
</html>

<?php

  $number = 33;
  $pass = 50;
  $good = 80;
  $excellent = 100;

  if ($_POST['guess'] < $number){
    echo "Fail";
  }
  elseif ($_POST['guess'] <= $pass){
  	echo "Pass!";
  }
  elseif ($_POST['guess'] <= $good){
  	echo "Good!";
  }
  elseif ($_POST['guess'] <= $excellent){
  	echo "Excellent!";
  }
  else{
  	echo "Error";
  }

?>
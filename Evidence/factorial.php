<?php
	// function factorial($n) {
	// 	if($n == 0) {
	// 		return 1;
	// 	}
	// 	$previous = factorial($n-1);
	// 	$current = $n * $previous;
	// 	return $current;

	// }


?>
<?php 
	// if(isset($_POST['n'])) {
	// 	$n =  $_POST['n'];

	// 	$r = factorial($n);

	// 	echo "<h1>Factorial number for $n = $r</h1>";
	// }
?>
<!-- <form method="post">
	<input type="text" name="n">
	<input type="submit" name="submit" value="submit">
	
</form> -->

<!---------------  ---------------->

<?php
// function factorial($n) {


// 	if($n == 0) {
// 		return 1;
// 	}
// 	return $n * factorial($n-1);

// }

?>

<?php 
// if(isset($_POST['number'])) {
// 	$n =  $_POST['number'];

// 	$r = factorial($n);

// 	if ($n=="" || $r=="") {
// 		echo "<h1>Factorial number Blank Not allowed</h1>";

// 	}

// 	else {
// 		echo "<h1>Factorial number $n = $r</h1>";
// 	}
// }
?>

<!-- ================= -->
<?

// if ($_POST) {
// 	$fact = 1;

// 	$num = $_POST['number'];

// 	for ($i=1; $i <= $num; $i++) { 
// 		$fact = $fact * $i;
// 	}
// 	echo "<h1>Factorial number $num = $fact</h1>";
// }

?>

<?php

if(isset($_POST['submit'])) {
	$number =  $_POST['number'];


	function factorial($n) {


		if($n == 0) {
			return 1;
		}
		return $n * factorial($n-1);

	}

	if ($number=="") {

		echo "<h1>Factorial number Blank Not allowed</h1>";

	}elseif ($number==0) {

		echo "<h1>Use Real Number 0 not allowed</h1>";

	}

	else {

		echo  "<h1>Factorial number = " . factorial($number) . "</h1>";
	}
}

?>

<form method="post">
	<input type="text" name="number">
	<input type="submit" name="submit" value="submit">
	
</form>
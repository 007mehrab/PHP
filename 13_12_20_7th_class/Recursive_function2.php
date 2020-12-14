<?

//  function display($number){

//  	if($number<= 10){

//  	echo "$number <br>";
//  	display ($number+2);  //Recursive function Call his himself

//  	}
//  }

// display(2);

?>


<!-- Factorial -->

<?

function factorial($n){
	if ($n < 0)
		return - 1;  //for nagetive vcalue
	if ($n == 0)
		return 1;    //for 0 value

	return ($n * factorial($n-1));
}

echo factorial(5);

?>
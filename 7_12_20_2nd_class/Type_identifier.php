<?
	// Identifier Function string
	$item = "43";
	if(is_string($item)){
		echo "Yes";
	}
	echo "<br>";

	// Identifier Function null
	$item = null;
	if(is_null($item)){
		echo "Yes";
	}
	echo "<br>";

	// Identifier Function boolean
	$item = true;
	if(is_bool($item)){
		echo "true";
	}

	echo "<br>";

	// Identifier Function Array
	$item = [10,20,30];
	$convert = is_array($item);

		echo $convert;

		echo "<br>";

?>
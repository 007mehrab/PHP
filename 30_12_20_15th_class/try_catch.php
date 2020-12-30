<?

 ini_set('display_errors', 'Off');


try {
	$fh = fopen("contacts.txt", "r");
	if (! $fh) {
		throw new Exception("Could not open the file!");
	}
}

catch (Exception $e) {
	// echo "Error (File: ".$e->getFile().", line ".
	// $e->getLine()."): ".$e->getMessage();

	echo "Error: ".$e->getMessage();
}

error_log("New errors <br>", 3, "logs/users.log");

?>
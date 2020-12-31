<?

$file = file("users.txt");

 echo "<pre>";
// print_r($file);

foreach ($file as $users) {
	$userarray = explode(',', $users);

	list($name, $email) = $userarray;

	echo "Name : $name Email : $email <br>";

}

?>
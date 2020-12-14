<?php

// $customers = array();

// $customers[] = array("Abdul alim", "onlyalim@gmail.com", "09273635423");

// $customers[] = array("Abdul kalam", "kamal@gmail.com", "05273635423");

// $customers[] = array("Abdul jamal", "jamal@gmail.com", "08273635423");

// echo "<pre>";
// print_r($customers);

?>

<!-- Another way -->

<?php

$customers = array();

$customers[] = array("Abdul alim", "onlyalim@gmail.com", "09273635423");

$customers[] = array("Abdul kalam", "kamal@gmail.com", "05273635423");

$customers[] = array("Abdul jamal", "jamal@gmail.com", "08273635423");

//  foreach ($customers AS $customer) {
//  	echo $customer[0] . "<br>";
// }

// foreach ($customers AS $customer) {
//  vprintf("<p>Name: %s<br>E-mail: %s<br>Phone: %s</p>", $customer);
// }


for($i=0; $i < count($customers); $i++){
	echo "<hr>";
	for ($j=0; $j < count($customers); $j++) { 
		echo $customers[$i][$j]. "<br>";
	}
}
echo "<hr>";

?>
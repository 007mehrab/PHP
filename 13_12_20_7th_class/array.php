<!-- Associative array---- Index[number] -->

<?

// $carBrands = [12 => "Honda", 15 => "TATA", "BMW"];  

// echo "<pre>";
// print_r($carBrands);

// $germanCars = [20 => "Audi", 22 => "Porche", 25 => "VW"];
// var_dump($germanCars);

?>



<?

// $districts = ["DH" => "Dhaka", "CM" => "Cumilla", "LM" => "Lalmonirhat"];

// print_r($districts);

?>


<!-- Multidimentional Array -->

<?

// $population = [
// 	"Dhaka"  => array("Male" => 4000, "Female" => 3600),
// 	"Sylhet" => array("Male" => 3000, "Female" => 2700),
// 	"Barisal"=> array("Male" => 2000, "Female" => 1800),
// 	"Bogura" => array("Male" => 1000, "Female" => 900)
// ];

//print_r($population);

// echo $population['Dhaka'] ['Male'];
// echo "<br>";
// echo $population['Dhaka'] ['Female'];

?>


<!-- Creating Arrays with array() -->

<?

function person() {
 return ['Frank M. Kromann', 'frank@example.com', 'Author'];
}

$name = person();
//echo $name[0];

//$name = person()[0]

echo "<pre>";
print_r($name);


?>
<h1>Sort the array by Capital name and Print</h1>

<?php 

$country = array("Bangladesh"=>"Dhaka", "India"=>"Dille", "Pakistan"=>"Islamabade", "Srilonka"=>"Colombo", "Nepal"=> "Katmondo");

asort($country);

foreach ($country as $key => $value) {
	echo "$key = $value<br>";
}
 ?>
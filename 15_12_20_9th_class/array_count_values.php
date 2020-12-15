<?php

$location = array("Alim"=>"Chapai", "Towfiq"=> "Gaibanda", "Amir"=>"Chapai");

$location["Mehrab"] = "Cumilla";
$location["Ismail"] = "Cumilla";

$count = array_count_values($location);
echo "<pre>";
print_r($count);

?>
<?php

$location = array("Alim"=>"Chapai", "Towfiq"=> "Gaibanda", "Amir"=>"Chapai");

$location["Mehrab"] = "Cumilla";
$location["Ismail"] = "Cumilla";

$count = array_unique($location);
echo "<pre>";
print_r($count);

?>


<?php

$states = array("Ohio", "Iowa", "Iowa", "Arizona", "Ohio");
$uniqueStates = array_unique($states);
print_r($uniqueStates);

?>
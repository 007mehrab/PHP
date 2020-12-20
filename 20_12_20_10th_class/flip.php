<?

$states = array("Dhaka" => "100", "Pennsylvania" => "200", "New Jersey" =>"400");

echo "<pre>";
print_r($states);   //Before flip

$flipped = array_flip($states);  //flipped change value to index

print_r($flipped);  //After flip

?>
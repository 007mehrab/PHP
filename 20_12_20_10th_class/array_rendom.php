<?

$states = array("Ohio" => "Columbus", "Iowa" => "Des Moines",
 "Arizona" => "Phoenix");
$randomStates = array_rand($states, 2);

echo "<pre>";
print_r($randomStates);

?>


<?

$Players = array("Sakib" => "Dhaka", "Tamim" => "chattogram" ,"Mushfiq" => "Bogura", "Rubel" => "Rangpur");

$randomPlayers = array_rand($Players, 3);

echo "<pre>";
print_r($randomPlayers);

?>
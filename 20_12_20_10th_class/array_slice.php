<?

$team = array("Shakib", "Tamim", "Mashrafi", "Mushfiquer", "Mahmudullah", "Taskin", "Rubel");


$subset = array_slice($team, 3);   //delete array where slice count	

echo "<pre>";
print_r($subset);

?>


<?

$team = array("Shakib", "Tamim", "Mashrafi", "Mushfiquer", "Mahmudullah", "Taskin", "Rubel");


$subset = array_slice($team, 3, 2);   //delete array where slice count and show 2 data	

echo "<pre>";
print_r($subset);

?>


<?

$team = array("Shakib", "Tamim", "Mashrafi", "Mushfiquer", "Mahmudullah", "Taskin", "Rubel");


$subset = array_slice($team, 4, -2);   //delete array where slice count and delete last2 data	

echo "<pre>";
print_r($subset);

?>



<?

$team = array("Shakib", "Tamim", "Mashrafi", "Mushfiquer", "Mahmudullah", "Taskin", "Rubel");


$subset = array_slice($team, -4);   //Start array where slice count	

echo "<pre>";
print_r($subset);

?>
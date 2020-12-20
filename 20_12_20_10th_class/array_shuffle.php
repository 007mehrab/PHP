<?

$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9");
$cards = array_merge($face, $numbered);

shuffle($cards);      //change value when refresh browser

echo "<pre>";
print_r($cards);

?>



<?

$team = array("Shakib", "Tamim", "Mashrafi", "Mushfiquer", "Mahmudullah", "Taskin", "Rubel");


shuffle($team);	

echo "<pre>";
print_r($team);

?>
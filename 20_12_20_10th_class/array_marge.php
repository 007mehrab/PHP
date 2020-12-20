<?

$face = array("J", "Q", "K", "A");
$numbered = array("2", "3", "4", "5", "6", "7", "8", "9");

$cards = array_merge($face, $numbered);

echo "<pre>";
print_r($cards);

?>



<?

$team1 = array("Shakib", "Tamim", "Mashrafi", "Mushfiquer");

$team2= array("Mahmudullah", "Taskin", "Rubel");

$Teams = array_merge($team1, $team2);   //Marge array

echo "<pre>";
print_r($Teams);

?>
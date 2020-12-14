<?

// $cities =array("Comilla" => "Malai","Chandpur" => "Hilsha");

// $key="Chandpur";
// if(array_key_exists($key,$cities)){
// 	echo "$key is famous for $cities[$key]";
// }

?>



<?

// $states = ["California", "Hawaii", "Ohio", "New York"];

// $state = "Ohio";

// if(in_array($state, $states))
// 	echo "Not to worry, $state is smoke-free!";

?>

<?

$state["Delaware"] = "December 7, 1787";
$state["Pennsylvania"] = "December 12, 1787";
$state["Ohio"] = "March 1, 1803";
if (array_key_exists("Ohio", $state))
 printf("Ohio joined the Union on %s", $state["Ohio"]);

?>
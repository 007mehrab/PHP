<?

$states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Connecticut");

$subset = array_splice($states, 4);


echo  "Inside States";
echo "<pre>";
print_r($states);

echo "<br>";

echo  "Inside Subset";
echo "<pre>";
print_r($subset);

?>


<?

$states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Connecticut");

$subset = array_splice($states, 4, -1);  //inside subset theke bad jabe (-1)


echo  "Inside States";
echo "<pre>";
print_r($states);

echo "<br>";

echo  "Inside Subset";
echo "<pre>";
print_r($subset);

?>


<?

$states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Connecticut");


$subset = array_splice($states, 4, -1, array("New York", "Florida")); //add new data in inside state

echo  "Inside States";
echo "<pre>";
print_r($states);

echo "<br>";

echo  "Inside Subset";
echo "<pre>";
print_r($subset);

?>

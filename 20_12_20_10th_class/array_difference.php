<?

$array1 = array("Dhaka", "Cumilla", "Noakhali", "Rajshahi", "Chadpur");
$array2 = array("Dhaka", "Cumilla", "Noakhali");

$diff = array_diff($array1, $array2);   //find first array to secend array uncommon data

echo "<pre>";
print_r($diff);

?>

<?

$array1 = array("OH", "CA", "NY", "HI", "CT");
$array2 = array("OH", "CA", "HI", "NY", "IA");
$array3 = array("TX", "MD", "NE", "OH", "HI");
$diff = array_diff($array1, $array2, $array3);
print_r($diff);

?>
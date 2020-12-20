<?

$states = array("Delaware", "Pennsylvania", "New Jersey");
sort($states);
echo "<pre>";
print_r($states);


?>


<?

$numbers = array(1, 2, 22, 11, 66, 77, 18, 100);
sort($numbers);
echo "<pre>";
print_r($numbers);


?>

<!-- Reverse -->

<?

$numbers = array(1, 2, 22, 11, 66, 77, 18, 100);
rsort($numbers);
echo "<pre>";
print_r($numbers);


?>



<!-- Asort -->
<?

$states = array("Delaware", "Pennsylvania", "New Jersey");
echo "<pre>";
print_r($states);  

asort($states);   //change array and index

echo "<pre>";
print_r($states);

?>
<?

$abbreviations = array("AL", "AK", "AZ", "AR");

$states = array("Alabama", "Alaska", "Arizona", "Arkansas");

$stateMap = array_combine($abbreviations,$states);

echo "<pre>";
print_r($stateMap);

?>
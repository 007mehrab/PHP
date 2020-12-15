<?

$students = array(
	["Name"=>"Alim", "Age"=>"25", "Phone"=>"013456789"],
	["Name"=>"Towfiq", "Age"=>"24", "Phone"=>"014456789"],
	["Name"=>"Mohsin", "Age"=>"23", "Phone"=>"015456789"]);


$names = array_column($students, 'Name');
echo "<pre>";
print_r($names);

?>

<br>

<?

$students = [
	["Name"=>"Alim", "Age"=>"25", "Phone"=>"013456789"],
	["Name"=>"Towfiq", "Age"=>"24", "Phone"=>"014456789"],
	["Name"=>"Mohsin", "Age"=>"23", "Phone"=>"015456789"]
	        ];


$Age = array_column($students, 'Age');
echo "<pre>";
print_r($Age);

?>

<br>

<?

$students = [
	["Name"=>"Alim", "Age"=>"25", "Phone"=>"013456789"],
	["Name"=>"Towfiq", "Age"=>"24", "Phone"=>"014456789"],
	["Name"=>"Mohsin", "Age"=>"23", "Phone"=>"015456789"]
	        ];


$output = array_column($students, 'Phone');
echo "<pre>";
print_r($output);

?>
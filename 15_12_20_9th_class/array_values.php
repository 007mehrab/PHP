<?

$students = array("Alim"=>"Chapai", "Towfiq"=>"Gaibanda", "Amir"=>"Chapainowabganj");

$students['Mohsin'] = "Noakhali";


$name = array_values($students);
echo "<pre>";
print_r($name);

?>
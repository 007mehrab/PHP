<?

$students = array("Alim"=>"Chapai", "Towfiq"=>"Gaibanda", "Amir"=>"Chapainowabganj");

$students['Mohsin'] = "Noakhali";

echo "<pre>";
print_r($students) ;

$name = array_search("Gaibanda",$students);

echo $name;

?>
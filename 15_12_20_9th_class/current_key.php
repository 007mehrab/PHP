<?

$students = array("Alim"=>"Chapai", "Towfiq"=>"Gaibanda", "Amir"=>"Chapainowabganj");

$students["Mehrab"] = "Cumilla";  //Mehrab = index //Cumilla = key

while($name = current($students)){
	echo $name. "<br>";
	next ($students);
  }

?>
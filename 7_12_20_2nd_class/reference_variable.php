<?
  $value1 = "Hellow";

  $value2 = $value1;  

  $value2 = "Goodbye";  

  echo $value1; 

?>
<br>
<?
  $value1 = "Hellow";

  $value2 = &$value1;  //reference value change content (&)

  $value2 = "Goodbye";  

  echo $value1;  //print :Hellow when use(&) then Goodbye.

?>
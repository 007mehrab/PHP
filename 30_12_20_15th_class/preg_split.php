<?php

$delimitedText = "Jason+++Gilmore+++++++++++Columbus+++OH";

$fields = preg_split("/\++/", $delimitedText);

 //foreach($fields as $field) echo $field."<br />";

echo "<pre>";
print_r($fields);

?>


<?
 // $delimitedText = "Jason+++Gilmore+++++++++++Columbus+++OH";

 // $fields = explode("+", $delimitedText);
 // //$fields = explode("++", $delimitedText);
 // //$fields = explode("+++", $delimitedText);

 // //foreach($fields as $field) echo $field."<br />";

 // echo "<pre>";
 // print_r($fields);

?>
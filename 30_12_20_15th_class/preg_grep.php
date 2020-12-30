<?php

 $foods = array("pasta", "steak", "fish", "potatoes");
 $food = preg_grep("/^p/", $foods);   //Searching an Array

 print_r($food);

?>
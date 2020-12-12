<?php
echo pow(5,3);
?>


<!-- If you want to store the function output in a variable, you can assign it like this: -->

<?php
 $value = pow(5,3); // returns 125
 echo $value;

$value = pow(5,3);
echo "Five raised to the third power equals {$value}.";

printf("Five raised to the third power equals %d.", pow(5,3));
?>
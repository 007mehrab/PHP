<?php

$fruits = array("apple", "Banana", "Mango");

$string = implode('/', $fruits);

echo $string;

?>

<br><br>

<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }
 
}
 
$obj = new MethodTest;
$obj->runTest('in object context');
?>

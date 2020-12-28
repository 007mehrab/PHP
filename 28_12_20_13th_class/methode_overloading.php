<?php
// class PropertyTest
// {
//     /**  Location for overloaded data.  */
//     private $data = array();
 
//     public function __set($name, $value)
//     {
//         echo "Setting '$name' Property to '$value'\n";
//         $this->data[$name] = $value;
//     }
 
//     public function __get($name)
//     {
//         echo "Getting '$name' Property with Value : ";
//         if (array_key_exists($name, $this->data)) {
//             return $this->data[$name];
//         }
//     }
 
// }
 
 
// $obj = new PropertyTest;
 
// $obj->a = "Abdul Alim";
// echo $obj->a ;
 
?>


<!-- -------------Isset------------------ -->

<?php
// class PropertyTest
// {
//     /**  Location for overloaded data.  */
//     private $data = array();
 
//     public function __set($name, $value)
//     {
//         echo "Setting '$name' Property to '$value'\n";
//         $this->data[$name] = $value;
//     }
 
//     public function __get($name)
//     {
//         echo "Getting '$name' Property with Value : ";
//         if (array_key_exists($name, $this->data)) {
//             return $this->data[$name];
//         }
//     }
//     // Checking Property Value is set?
//     public function __isset($name)
//     {
//         //echo "Is '$name' Property set?\n";
//         echo isset($this->data[$name])?"Yes '$name' Property is set":"No '$name' Property is Not set";
//     }
 
// }
 
 
// $obj = new PropertyTest;
 
// $obj->a = "Abdul Alim";  //set
// echo "<hr>";
// echo $obj->a . "<hr>";   //get

// $obj->b = "Abdul Karim";
// echo "<hr>";
// echo $obj->b . "<hr>";


// isset($obj->a);
// echo "<hr>";
// isset($obj->b);
// echo "<hr>";
// isset($obj->c);  //c is not set
 
?>


<!-- ------UNset-------- -->


<?php
class PropertyTest
{
    /**  Location for overloaded data.  */
    private $data = array();
 
    public function __set($name, $value)
    {
        echo "Setting '$name' to '$value'\n";
        $this->data[$name] = $value;
    }
 
    public function __get($name)
    {
         echo "Getting '$name' Property with Value : ";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
    }
     
    public function __isset($name)
    {
        echo "Is '$name' Property set?\n";
        echo isset($this->data[$name])?"Yes '$name' Property is set":"No '$name' Property is Not set";
        echo "\n";
    }
 
    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }
 
}
 
 
$obj = new PropertyTest;
 
$obj->a = "Masud Alam";
echo $obj->a . "<hr>";
echo isset($obj->a);  //first set (a)

unset($obj->a);  //unset (a)

echo isset($obj->a); //then, (a) is now unset
echo "\n";
 
?>
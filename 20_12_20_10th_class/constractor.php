<?php
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name) {
//     $this->name = $name;
//   }
//   function get_name() {
//     return $this->name;
//   }
// }

// $apple = new Fruit("Apple");
// echo $apple->get_name();
?>



<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {         //constructor function
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {                         //Normal function
    return $this->name;
  }
  function get_color() {                        //Normal function
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
 

<br>

<!-- Invoking Parent Constructors -->
<?
 class Employee
 {
 protected $name;
 protected $title;
 function __construct()
 {
 echo "Employee constructor called! ";        //constractor function
 }
 }



 class Manager extends Employee
 {
 function __construct()
 {
 parent::__construct();
 echo "Manager constructor called!";          //parent constractor function
 }
 }

 $employee = new Manager();                
?>
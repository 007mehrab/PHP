<!-- Public -->

<?php
class GrandFather
{
    public $name='Masud Alam';  // A public variable
    public function getName(){
      return $this->name;
    }
}
 
class Daddy extends GrandFather // Inherited class
{
    function displayGrandFaName()
    {
        return $this->name; // The public variable will be available to the inherited class
    }
 
}
 
$grandFa=new GrandFather;
 
echo $grandFa->getName(),"\n";
 
// Inherited class Daddy wants to know Grandpas Name
$daddy = new Daddy;
echo $daddy->displayGrandFaName(),"\n"; // Prints 'Masud Alam'
 
// Public variables can also be accessed outside of the class!
$GrandpasName = new GrandFather;
echo $GrandpasName->name; // Prints 'Masud Alam
 
?>

<!-- Protected -->


<?php
// class GrandFather
// {
//     protected $name='Masud Alam';  // A Protected variable
//     public function getName(){
//       return $this->name;
//     }
// }
 
// class Daddy extends GrandFather // Inherited class
// {
//     function displayGrandFaName()
//     {
//         return $this->name; // The Protected Property will be available to the inherited class
//     }
 
// }
 
// $grandFa=new GrandFather;
 
// echo $grandFa->getName(),"\n"; //Prints 'Masud Alam'
 
// // Inherited class Daddy wants to know Grandpas Name
// $daddy = new Daddy;
// echo $daddy->displayGrandFaName(),"\n"; // Prints 'Masud Alam'
 
// // Protected Property can not be accessed outside of the class!
// $GrandpasName = new GrandFather;
// echo $GrandpasName->name; // // Results in a Fatal Error
 
?>


<!-- Private -->


<?php
// class GrandFather
// {
//     private $name='Masud Alam';  // A private variable
//     public function getName(){
//       return $this->name;
//     }
// }
 
// class Daddy extends GrandFather // Inherited class
// {
//     function displayGrandFaName()
//     {
//         return $this->name; // The Private Property will not available to the inherited class and will show notice
//     }
 
// }
 
// $grandFa=new GrandFather;
 
// echo $grandFa->getName(),"\n"; //Prints 'Masud Alam'
// echo $gradFa->name, "\n"; //Results in a Notice 
 
// // Inherited class Daddy wants to know Grandpas Name
// $daddy = new Daddy;
// echo $daddy->displayGrandFaName(),"\n"; // Results in a Notice 
 
// // Protected Property can not be accessed outside of the class!
// $GrandpasName = new GrandFather;
// echo $GrandpasName->name; // // Results in a Fatal Error
 
?>
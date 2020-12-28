<?php
// abstract class AbstractClass{
//     // Our abstract method only needs to define the required arguments
//     abstract protected function getName($name);
//     }
 
// class childClass extends AbstractClass{
//     public function getName($name) {
//         return 'Hi '.$name.' !';
//     }
// }
 
// $class = new childClass;
// echo $class->getName('Shahriar');
?>


<?php
// abstract class AbstractClass{
//     // Our abstract method only needs to define the required arguments
//     abstract protected function getName($name);
//     }
 
// class childClass extends AbstractClass{
//     public function getName($name,$prefix='Mr. ') {
//         return 'Hi '.$prefix.$name.' !';
//     }
// }
 
// $class = new childClass;
// echo $class->getName('Shahriar');

?>


<?php
abstract class AbstractClass{
    // Our abstract method only needs to define the required arguments
    abstract protected function getName($name,$prefix);
    }
 
class childClass extends AbstractClass{
    public function getName($name,$prefix) {
        return 'Hi '. $prefix . " " . $name .' !';
    }
}
 
$class = new childClass;
echo $class->getName('Shahriar', 'Mr. ');   //($name,$prefix)
?>
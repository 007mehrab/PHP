<?php
class BaseClass {
   public function test() {
       echo "BaseClass::test() called\n";
   }
   
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called\n";
   }
}

class ChildClass extends BaseClass {
   public function moreTesting() {
       echo "ChildClass::moreTesting() called\n";
   }
}
// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
?>




<?php
// class BaseClass {
//    public function test() {
//        echo "BaseClass::test() called";
//    }
   
//    public function moreTesting() {
//        echo "This is a method from Parent class <br>";
//    }
// }

// class ChildClass extends BaseClass {
//    public function moreTesting() {
//        echo "This is a method from Child class";
//    }
// }
// $obj = new BaseClass;
// $obj->moreTesting();

// $obj = new ChildClass;
// $obj->moreTesting();

// Results in Fatal error: Cannot override final method BaseClass::moreTesting()
?>
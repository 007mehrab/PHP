<?php
//  class person
//  {
//     private $name;       //public can change
//     //private $age="";    //private and protected cann't change
 
//     private function setName($name="")
//     {
//       $this->name=$name;
//     }
//     public function setAge($age="22")
//     {
//       $this->age=$age;
//     }
//     public function getInfo()
//     {
//       echo "Hello, My name is ".$this->name." and my age is ". $this->age." years.";
//     }
// }
//   $person = new person();
//   // $person->name = "Siam";    //public
 
//   $person->setName("Abdul Alim");
//   $person->setAge("33");
//   $person->getInfo();

?>

<?php
 class person
 {
    private $name="";
    private $age=""; 
 
    private function setName($name="")
    {
      $this->name=$name;
      return $this;         //Method Chaining you have add return $this
    }
    public function setAge($age="22")
    {
      $this->age=$age;
      return $this;        //Method Chaining you have add return $this
    }
    public function getInfo()
    {
      echo "Hello, My name is ".$this->name." and my age is ". $this->age." years.";
    }
}

$person = new person();

$person->setName("Masud Alam")->setAge("33")->getInfo(); //Chaining Method 

?>
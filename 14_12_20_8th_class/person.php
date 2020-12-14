<?php
 class person
 {
    private $name="";
    private $age="";
 
    public function setName($name="")
    {
      $this->name=$name;
    }
    public function setAge($age="")
    {
      $this->age=$age;
    }
    public function getInfo()
    {
      echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
    }
}
 
$person1 = new person();
  $person1->setName("Mehrab Hossain");
  $person1->setAge("23");
  $person1->getInfo();

  echo "<br>";

$person2 = new person();
  $person2->setName("Masud Alam");
  $person2->setAge("33");
  $person2->getInfo();
?>
<?


class simpleClass
{
	public $name = "Abdul Alim";   //Default value
	public $age = 25;
	public $address = "Mirpur";

	public function Contact(){
		$a = $this->name;
		$b = $this->age;
		$c = $this->address;

		return "Name : " . $a . "<br>Age : " . $b . "<br>Address : " . $c . "<hr>";
	}

}

$objectHandler = new simpleClass;
echo $objectHandler->Contact();

$object2 = new simpleClass;
$object2->name = "Mehrab Hossain";
$object2->age = 23;
$object2->address = "Agargaon";

echo $object2->Contact();


$object3 = new simpleClass;
$object3->name = "Ismail Hossain";
$object3->age = 23;
$object3->address = "Dhanmondi";

echo $object3->Contact();

?>
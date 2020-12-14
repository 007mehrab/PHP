<?

// class simpleClass{

// 	public $x =10;
// 	public $y =20;

// 	// protected $x =;
// 	// protected $y =;

// 	// private $x =;
// 	// private $y =;
// }

// $object1 = new simpleClass;

// $object2 = new simpleClass;

// echo $object1->x . "<br>";
// echo $object2->y;

?>



<?

// class simpleClass{

// 	private $x =10;
// 	public $y =20;

// 	public function displayVar(){
// 		echo $this->x;
// 		echo $this->y;
// 	}


// }

// $object1 = new simpleClass;

// $object2 = new simpleClass;

// $object1->displayVar();

?>

<?

// class simpleClass{

// 	private $x =10;
// 	public $y =20;
// 	public const z = 50;

// 	public function displayVar(){
// 		echo $this->x;               //private
// 	}


// }

// $object1 = new simpleClass;

// $object2 = new simpleClass;

// $object1->displayVar();  //function
// echo "<br>";

// echo $object1->y;  //public
// echo "<br>";

// echo $object1::y;  //constant

?>


<?

class simpleClass{

	private $x =10;
	public $y =20;
	public const z = 50;
	static public $s = "I am static";

	public function displayVar(){
		echo $this->x;
		echo "<br>";
		echo self::z;    //constant
		echo "<br>";
		echo self::$s;   //static
	}


}

$object1 = new simpleClass;

$object2 = new simpleClass;

$object1->displayVar(); //function call
echo "<br>";

echo $object1->y;  //public
echo "<br>";

echo $object1::z;  //constant

?>
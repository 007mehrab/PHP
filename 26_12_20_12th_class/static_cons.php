<?
// class simpleClass
// {
// 	//property declaration
// 	public $var = 'This is a proparty with variable';
// 	public const a = "This is a proparty with constant";

// 	public function sayHellow(){
// 		echo "Hellow world ";

// 	}

// }
// simpleClass::sayHellow();
// echo "<br>";
// echo simpleClass::a;

?>

<?
class simpleClass
{
	//property declaration
	public $var = 'This is a proparty with variable';
	public const a = "This is a proparty with constant";

	public function sayHellow(){
		echo "Hellow world ";
		echo simpleClass::a;

	}

}
$obj = new simpleClass;
echo $obj->var;
echo "<br>";
simpleClass::sayHellow();
echo "<br>";
echo simpleClass::a;

?>
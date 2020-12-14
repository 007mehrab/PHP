<?

// $x = function (){

// 	echo "Hellow, This is Anonymous function";

//     };

//   $x();


 //  function myFunction(){

	// echo "This is normal Anonymous function";

 //    };
  
 //  $x = "myFunction";

 //  $x();

?>



<?

 // $a = 15;
 //  $example = function() {

 //  $a += 100;
 //  echo $a . "<br>";
 //  };
 //  $example();
 //  echo $a . "<br>";


 // $a = 15;
 //  $example = function(){
 //  global $a;
 //  $a += 100;
 //  echo $a . "<br>";
 //  };
 //  $example();
 //  echo $a;

?>

<!-- Use  -->

<?

// $a=15;

// $example = function() use ($a) {
//  $a += 100;
//  echo $a . "<br>";
// };

// $example();
// echo $a;

?>

<!-- Reference -->

<?

$a=15;

$example = function() use (&$a) {    //& is a reference
 $a += 100;
 echo $a . "<br>";
};

$example();
echo $a . "\n";

?>
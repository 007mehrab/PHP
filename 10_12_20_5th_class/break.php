<?php
 $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);

 //Random number
 $randomNumber = rand(1,50);
 echo $randomNumber;
 echo "<br>";

 echo $x = in_array($randomNumber,$primes);  //true(1) or false( )

?>

<br><br>
<!-- ------------------------------------------------------------------ -->

<?php
 $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
 for($count = 1;$count < 1000; $count++) {
 $randomNumber = rand(1,50);
 if (in_array($randomNumber,$primes)) {

// printf("Prime number found! %d <br />", $randomNumber);    //or
 	print("Prime number found! $randomNumber <br />");

 break;   //when break closed, it will be show all of prime number

 } else {

 	// printf("Non-prime number found! %d <br />", $randomNumber);    //or
 print("Non-prime number found: $randomNumber <br /> ");

 }
 }

?>
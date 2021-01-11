
<form method="post">

Enter a Number: <input type="text" name="input"><br><br>  
<input type="submit" name="submit" value="Submit">  

</form>  

<?php

$input=$_POST['input'];

if ($input=="") {
	echo "Please Enter Real Number";
}else{

if($_POST)  
{  
     
    for ($i = 2; $i <= $input-1; $i++) {  
      if ($input % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
     echo '<h2>The Number '. $input . ' is not prime</h2>';  
}  else {  
   echo '<h2>The Number '. $input . ' is prime</h2>';  
   }   
}
} 

?>
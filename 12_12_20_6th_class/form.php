<?php

//print_r($_POST);


 if(isset($_POST['register'])){
//     echo"First Name ".$_POST['name']."<br>";
//     echo"email ".$_POST['email']."<br>";

  //  $value= [$_POST['uname'],$_POST['name'],$_POST['email'],$_POST['password']];


    // //foreach working
    /* foreach($value as $count){
       
    //     echo"$count <br>";
     }  */
    //  print_r($value);
    // for($i=1;$i<count($value);$i++){
    //     // echo $value[$i];
    //     print_r($value[$i]);
    //     echo"<br>";
    // }
    
$val=['j','j','r'];
for($i=0; $i<count($val);$i++){
    echo $val[$i]."<br>";
}
}


?> 

<form action="" method="POST">
<p>Username:  <input type="text" name="uname"></p>
<p>Name:  <input type="text" name="name"></p>
<p>Email:  <input type="email" name="email"></p>
<p>Password: <input type="password" name="password"></p>
<input type="submit" value="Register">
</form>
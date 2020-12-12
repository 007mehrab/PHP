<?php
 function UserProfile()
 {
 // $user[] = "Jason Gilmore";
 // $user[] = "jason@example.com";     //Array
 // $user[] = "English";

 $user = ["Mehrab Hossain", "Mahrab.bhuiyan@gmail.com" ,"Bangla","Male"];

 return $user;
 }

 list($name, $email, $language, $Gender) = UserProfile();
 echo ("Name: {$name} <br> Email: {$email} <br> Language: {$language} <br> Gender :{$Gender}");
?>
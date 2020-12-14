<?php

// Open the users.txt file
$users = file("users.txt");

// While the End of File (EOF) hasn't been reached, get next line
foreach ($users as $user) {

 // use explode() to separate each piece of data.
 list($name, $profession, $address) = explode("|", $user);

 // format and output the data

 printf("Name: %s <br>", $name);
 printf("Profession: %s <br>", $profession);
 printf("Address: %s <br>", $address);

 echo "<hr>";
}

?>
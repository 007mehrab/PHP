<?php

 $usernames = array("Grace","Doris","Gary","Nate","missing","Tom");
 for ($x=0; $x < count($usernames); $x++) {

 if ($usernames[$x] == "missing")

     continue; //continue closed the item

 printf("Staff member: %s <br />", $usernames[$x]);
 }

?>
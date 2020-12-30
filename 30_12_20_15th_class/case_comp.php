
<!-- Comparing Two Strings’ Case Insensitively -->

<?php

 $email1 = "admin@example.com";
 $email2 = "ADMIN@example.com";
 //$email2 = "kuyghsjkfhADMIN@example.com";

 if (! strcasecmp($email1, $email2)){
 echo "The email addresses are identical!";
 }
 else{
 	 echo "The email addresses are not identical!";
 }

?>
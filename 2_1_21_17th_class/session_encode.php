<?php
 // Initiate session and create a few session variables
session_start();
 // Set a few session variables.
$_SESSION['username'] = "jason";
$_SESSION['loggedon'] = date("M d Y H:i:s");
 // Encode all session data into a single string and return the result
$sessionVars = session_encode();

session_decode($sessionVars);

// $sessionVars = serialize($_SESSION);  //count data

echo $sessionVars;

echo "<br>";

echo "User ".$_SESSION['username']." logged on at ".$_SESSION['loggedon'].".";

?>
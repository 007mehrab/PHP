<?php

session_start();
$_SESSION['username'] = "Meharb";
$_SESSION['email'] = "Meharb@gmail.com";
$_SESSION['phone'] = "017777";

printf("Your username is %s.", $_SESSION['username']);
echo "<br>";
printf("Your email is %s.", $_SESSION['email']);

?>

<br><br>

<a href="session_check.php">Session Check</a>
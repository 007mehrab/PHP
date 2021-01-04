<!-- <?
//$c_name = "user";
//$c_value = "Alim";

//setcookie($c_name, $c_value, time() + (86400 * 30), "/");

?>

<html>
<body>

	<?

	//echo $_COOKIE['user'];

	?>

</body>
</html> -->

<?php
$cookie_name = "user";
$cookie_value = "Shakib Alim";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php

// session_start();

// $user = $_SESSION['username'];
// setcookie('name', $user, time() + (86400 * 30), "/"); // 86400 = 1 day

?>


<?php

// if(!isset($_COOKIE[$cookie_name])) {
// echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
// echo "Cookie '" . $cookie_name . "' is set!<br>";
// echo "Value is: " . $_COOKIE[$cookie_name];
// }

?>

<?php

//echo $_COOKIE['user'];

session_start();

echo "<br>";
print_r($_SESSION);

print_r($_COOKIE);

//session_unset();
//session_destroy();

?>
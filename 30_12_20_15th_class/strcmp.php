<!--Syntex: int strcmp(string str1, string str2) -->

<!-- 0 if str1 and str2 are equal
 -1 if str1 is less than str2
 1 if str2 is less than str1 -->
<?php

$pswd = "supersecret";
$pswd2 = "supersecret2";
if (strcmp($pswd, $pswd2) != 0) {
	echo "Passwords do not match!";
} else {
	echo "Passwords match!";
}

?>

<!-- ---------------------- -->

<?php

// $pswd = "supersecret";
// $pswd2 = "supersecret2";
// if (strcmp($pswd, $pswd2) == -1) {
// 	echo "Passwords do not match!";
// } else {
// 	echo "Passwords match!";
// }

?>
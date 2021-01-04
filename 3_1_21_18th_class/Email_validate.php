<?

$email = "mahrab@gmail.com";
if (! filter_var($email, FILTER_VALIDATE_EMAIL))
{
 echo "INVALID E-MAIL!";
}
else{
	echo "VALID E-MAIL $email";
}

?>
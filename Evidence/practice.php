<center><style>
.valid {
		background-color:#0B7017;
		border: 1px solid black;
		text-align: center;
		width: 400px;	
	}
	
	.invalid {
		background-color:#F50F13;
		border: 1px solid black;
		text-align: center;
		width: 400px;
	}
</style>

<center>
<form method="post" action="">
	
	Name :<br><input type="text" name="Name" value=""><br>
	Email :<br><input type="text" name="email"> <br><br>

	<input type="submit" name="submit" value="submit">

</form>
</center>


<?

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$name = $_POST['Name'];
	$email = $_POST['email'];
	$errors = array();

	if($_POST['Name'] ==""){

		$errors[] = "Please Enter your Name";

	}else{

		if(!preg_match('/^[A-z]{4,8}$/', $name)){
			$errors[] = "Please Valid Name";
		}
	}


	if($_POST['email'] ==""){

		$errors[] = "Please Enter your email";

	} else{

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors[] = "Please Valid Email";
		}
	}


   //If no error

	if(count($errors)<1){
		echo "<h3 class='valid'> Name is $name </h3>";
		//echo "<br>";
		echo "<h3 class='valid'>Email is $email </h3>";
	}
	else{
		foreach ($errors as $error) {
			echo  "<h3 class='invalid'>" . $error . "<br></h3>";
		}
	}

}

?>
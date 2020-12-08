<?

// echo $_ENV['HOSTNAME'];

// echo "<pre>";
// print_r($_server);

// $_ENV['fname'] = "Mehrab";
// $_ENV['lname'] = "Hossain";

// print_r($_ENV);


?>
 <form action="" method="post">
	Name : <br>
	<input type="text" name="Fullname"><br>
	Age :<br>
	<input type="text" name="age"><br><br><br>

	<input type="submit"  value="Submit">

</form>

<?
print_r($_REQUEST)
?>
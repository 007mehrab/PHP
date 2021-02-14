<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.style{
			background-color: #C2D3E1;
			padding: 10px;
			width: 250px;
		}
		.ok{
			color: green;
		}
		.err{
			color: red;
		}

	</style>
	<title>Procedurer</title>
</head>
<body>

	
	<center>

		<h2>Insert Data In Manufacturer Table</h2>

		<div class="style">

			<form action="" method="post">


				ID :<br><input type="text" name="id"><br><br>
				NAME :<br><input type="text" name="name"><br><br>
				ADDRESS :<br><input type="text" name="address"><br><br>
				CONTACT NO :<br><input type="text" name="contact_no"><br><br>

				<input type="submit" name="submit" value="SUBMIT">

			</form>

		</div>


		

		<?

		$db = new mysqli("localhost", "root", "", "company");

		if ($_SERVER['REQUEST_METHOD']=='POST') {
			extract($_POST);

			$sql = "CALL data_insert('$id', '$name', '$address', '$contact_no')";

			$db->query($sql);

			if($db->affected_rows>0){

				echo "<h3 class='ok'> Successfully Inserted </h3>";

			}else{
				echo "<h3 class='err'> Failed </h3>";
			}

		}

		?>



	</center>

</body>
</html>
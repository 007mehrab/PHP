<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trigger Delete</title>
</head>
<body>

	<center>

		<form action="" method="post">

			<label for="delete"><h2>Manufacturer</h2></label><br>

			<select name="name" id="delete">
				<option value="0" hidden=""> Select Product </option>

				<?php 

				$db = new mysqli("localhost", "root", "", "company");
				$sql = "SELECT * FROM manufacturer";
				$data=$db->query($sql);

				while($row = $data->fetch_assoc())  {?> 

				<option value="<?php echo $row['id']?>"> <?php echo $row['name']?> </option>

				<? } ?>

				<input type="submit" name="delete" value="DELETE">

			</select>
		</form>



		<?php
		$db=new mysqli("localhost","root","","company");
		if (isset($_POST['delete'])) {

			$id = $_POST['name'];

			$sql="DELETE FROM manufacturer where id=$id";

			if ($db->query($sql)) {
				echo "<h2>$id deleted</h2>";
			}
			else{
				echo "<h2> Invalid <?h2>";
			}
		}

		?>

	</center>
	
</body>
</html>
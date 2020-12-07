<?
  //echo "<pre>";
  //print_r($_SERVER);
  
  // echo "Document Root :" . $_SERVER['DOCUMENT_ROOT'];
  // echo "<br>";
  // echo "User Agent :" . $_SERVER['HTTP_USER_AGENT'];
  // echo "<br>";
  // echo "IP Address :" . $_SERVER['REMOTE_ADDR'];
  // echo "<br>";
  // echo "REF Address :" . $_SERVER['HTTP_REFERER'];
  // echo "<br>";
  // echo "URI :" . $_SERVER['REQUEST_URI'];
  
?>

<!-- <h2>_Get Super Globel</h2> -->  <!--(_GET) is Default Globel-->

<!-- <a href="super_globel.php?id=50&name=Alim">Click Here</a>
<br><br> -->
<!-- <?
  
  // echo $_GET['id'];
  // echo "<br>";
  // echo $_GET['name'];

  // $_GET['age'] = 25;
  // echo "<pre>";
  // print_r($_GET);

?>
 -->

<!--  <form action="">
	Name : <br>
	<input type="text" name="Fullname"><br>
	Age :<br>
	<input type="text" name="age"><br><br><br>

	<input type="submit"  value="Submit">

</form> -->

<?
// echo "<pre>";
// print_r($_GET);

?>

<br>


<form action="" method="post">
	Name : <br>
	<input type="text" name="Fullname"><br>
	Age :<br>
	<input type="text" name="age"><br><br><br>

	<input type="submit"  value="Submit">

</form>

<?
// echo "<pre>";
// print_r($_POST);

$name = $_POST['Fullname'];
$age = $_POST['age'];

// echo "Name is {$name} and age {$age}";
echo "<br>";
echo "Name : $name";
echo "<br>";
echo "Age : $age";

?>


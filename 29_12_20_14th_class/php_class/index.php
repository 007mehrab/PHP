<?

//require_once("book.class.php");
//require_once("employee.class.php");

function __autoload($class){
	require_once("$class.class.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

<?

$obj1 = new books;
echo $obj1->name;

echo "<hr>";

$emp1 = new employee;
echo $emp1->name;
?>
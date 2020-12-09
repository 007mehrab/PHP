<?

for ($i=1; $i<=10 ; $i++) { 
	echo "$i is my number <br>";
}
?>

<br><br>

<!-- ------------- -->

<?

$fruits = ["Apple","Mango","Orange"];

// echo count($fruits);

for ($i=0; $i<count($fruits) ; $i++) { 
echo $fruits[$i] . "<br>";

}

?>

<br>
<!-- -------------------- -->

<?

$fruits = ["Apple","Mango","Orange"];

echo "<ol>";

for ($i=0; $i<count($fruits) ; $i++) {
    
	print "<li> $fruits[$i] </li>";
	
}
echo "</ol>";

?>

<!-- ----------------- -->

<?

$fruits = ["Apple","Mango","Orange"];

$list = '';

for ($i=0; $i<count($fruits) ; $i++) {

	$list .="<li> $fruits[$i] </li>";
	
}

echo "<ol>$list</ol>";

?>
<?

$str = "Hellow World";

echo str_pad($str, 20, ".");

echo "<br>";

echo str_pad($str, 60, ".", STR_PAD_LEFT);
echo "<br>";
echo str_pad($str, 60, "|", STR_PAD_RIGHT);
echo "<br>";
echo str_pad($str, 60, ":", STR_PAD_BOTH);

?>
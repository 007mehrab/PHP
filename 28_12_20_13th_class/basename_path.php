<?

$path = 'G:\xaamp\htdocs\IDB_PWAD_Round_46\PHP\user.php';

echo basename($path, ".php");
echo "<br>";
echo basename($path);

?>

<br>

<?php

 $path = '/home/www/data/users.txt';
 printf("Filename: %s <br />", basename($path));
 printf("Filename without extension: %s <br />", basename($path,
".txt"));
 
?>
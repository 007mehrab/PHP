<?php

 // $pathinfo = pathinfo('/home/www/htdocs/book/chapter10/index.html');
 // printf("Dir name: %s <br />", $pathinfo['dirname']);
 // printf("Base name: %s <br />", $pathinfo['basename']);
 // printf("Extension: %s <br />", $pathinfo['extension']);
 // printf("Filename: %s <br />", $pathinfo['filename']);

?>


<?php
$path = 'G:\xaamp\htdocs\IDB_PWAD_Round_46\PHP\user.php';

$info = pathinfo($path);
echo "<pre>";
print_r($info);
echo "<pre>";


echo $info['filename'];
echo "<pre>";

echo $info['dirname'];

?>
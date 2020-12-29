<?php

 $fh = fopen('../link.txt', 'r');   //(r)-read only

 //echo fgets($fh);  //one line show

 while (!feof($fh)) echo fgets($fh) . "<br>";  //multiple line show

 fclose($fh);
?>
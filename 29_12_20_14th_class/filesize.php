<?php

 $file = '../../images/map.jpg';
 $bytes = filesize($file);
 $kilobytes = round($bytes/1024, 2);

echo $kilobytes . "KB";
//printf("File (%s) is $bytes bytes, or %.2f kilobytes", basename($file),$kilobytes);

?>
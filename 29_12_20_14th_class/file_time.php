<?php

$file = '../link.txt';

printf("File last accessed: %s", date("m-d-y g:i:s a",fileatime($file)));
echo "<br>";
printf("File inode last changed: %s", date("m-d-y g:i:s a",filectime($file)));
echo "<br>";
echo "File last updated: ".date("m-d-y g:i:s a", filemtime($file));

?>
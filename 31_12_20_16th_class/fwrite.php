<?
$fh = fopen('textfile.txt', 'w');  //when use "w" then automatic create txt file

$content = 'Something needs to be write';
$content1 = 'Something needs to be another write';

fwrite($fh, "$content <br> $content1");

fclose($fh);


$fh = fopen('textfile.txt', 'r');

$file ='textfile.txt';

echo filesize($file);
echo "<br>";

$output = fread($fh, filesize($file));

echo $output;

?>
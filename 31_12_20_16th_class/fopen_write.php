<?

//$fh = fopen('textfile.txt', 'w');  //when use "w" then automatic create txt file
$file ='textfile.txt';

$content = 'Today is Thursday';

file_put_contents($file, $content);

?>


<?


$file ='textfile.txt';

$current_content = file_get_contents($file);

$current_content .= 'Tomorrow is Friday';

file_put_contents($file, $current_content);

?>

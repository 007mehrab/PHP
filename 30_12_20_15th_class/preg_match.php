<?php

$line = "vim is the greatest word processor ever created! Oh vim, how I love thee!";
//pattern=/\bVim\b/i , string=$line, output=$match
if (preg_match("/\bVim\b/i", $line, $match)) print "Match found!";

?>

<br>
<!--  preg_match_all()  -->
<?php

// $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
// preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
// printf("%s <br /> %s", $pat_array[0][0], $pat_array[0][1]);

?>



<?php

$userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";

preg_match_all("/(Ti.*)/", $userinfo, $pat_array);
echo "<pre>";
print_r($pat_array);

?>
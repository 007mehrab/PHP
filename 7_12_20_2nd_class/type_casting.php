<?
// $score = (double) 13;
// echo "$score";

// $score + 45.30;

// $score = (int) 13.5;
// var_dump($score);

// $score = (int) "Alim"; //this is not integer
// var_dump($score);

// $sentence = "Mehrab Hossain"; //this is not integer

// echo (int) $sentence;

// var_dump($sentence);

// $sentence = "Mehrab Hossain"; //this is not integer

// $changed = (int) $sentence;

// var_dump($changed);

$score = 1114;

$scoreboard = (array)$score;
echo $scoreboard[0];

echo "<br>";

var_dump($scoreboard);

?>
<br>

<?
  $model = "Toyata";
  $obj = (object)$model;
  var_dump($obj);

  echo $obj->scalar;
?>

<br>

<?
  $x = 4500;

  $convert = (string)$x;

  var_dump($convert);

?>
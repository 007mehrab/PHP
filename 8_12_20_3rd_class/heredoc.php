<?
 // $website = "https://www.yahoo.com";

 // echo <<<EXCERPT
 // <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
 // <a href=" $website">Yahoo.com</a>
 // Laborum, architecto, veniam. Quaerat delectus nemo tempora ex repellat veniam, impedit excepturi, amet perspiciatis voluptatum ab placeat odit nihil tempore, numquam alias?</p>

 // EXCERPT;

?>

<?
 $website = "https://www.yahoo.com";

  $output = <<<MEHRAB
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
 <a href=" $website">Yahoo.com</a> Laborum, <i>architecto</i>, veniam.</p>

 MEHRAB;

?>
<hr>
<div><?Php echo $output ?></div>

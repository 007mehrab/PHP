<?php

 // $text = "This is a link to http://www.wjgilmore.com/.";
 // echo preg_replace("/http:\/\/(.*)\//", "<a href=\"\${0}\">\${0}</a>",$text);

?>

<?php

$text = "This is a link to http://www.wjgilmore.com/. My site";

 echo preg_replace("/(http:.*)\//", "<a href=\"\${0}\">Mehrab hossain</a>",$text);

?>

<br><br>

<?php

 $text1 = "This is My Name Md:wjgilmore";
 echo preg_replace("/(Md:.*)/", "Mehrab Hossain",$text1);

?>

<br><br>

<?php

 $draft = "In 2010 the company faced plummeting revenues and scandal.";
 $keywords = array("/faced/", "/plummeting/", "/scandal/");
 $replacements = array("celebrated", "skyrocketing", "expansion");
 echo preg_replace($keywords, $replacements, $draft);

?>
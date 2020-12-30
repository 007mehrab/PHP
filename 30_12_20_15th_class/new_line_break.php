
<!-- Converting Newline Characters to HTML Break Tags -->

<?php

$recipe = "3 tablespoons Dijon mustard
1/3 cup Caesar salad dressing
8 ounces grilled chicken breast
3 cups romaine lettuce
My name is Mehrab Hossain \n I am a student of IsDB";
 // convert the newlines to <br />'s.
echo nl2br($recipe);

?>
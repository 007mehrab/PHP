<?php
$text = '<p>Test paragraph.</p>
<a href="$fragment">Other text</a>';

echo strip_tags($text);   //no other parameter use

//echo strip_tags($text, '<p>');
?>
<?

echo "<pre>";
print_r($_FILES);

$filename = $_FILES['classnotes']['name'];

$tmpname = $_FILES['classnotes']['tmp_name'];

$destination = "uploads/";

move_uploaded_file($tmpname, $destination.$filename);

?>

<?php

// if (is_uploaded_file($_FILES['classnotes']['tmp_name'])) {
//  copy($_FILES['classnotes']['tmp_name'],
//  "/www/htdocs/classnotes/".$_FILES['classnotes']['name']);
// } else {
//  echo "<p>Potential script abuse attempt detected.</p>";
// }

?>
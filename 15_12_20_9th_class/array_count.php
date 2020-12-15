<?php

$location = array("Alim","Chapai", array("Towfiq", "Gaibanda"), "Amir");

echo count($location, 0);

?>

<br>

<?php

$location = array("Alim","Chapai", array("Towfiq", "Gaibanda"), "Amir");

//echo count($location, 1);
echo sizeof($location, 1);    //sizeof and count are same

?>
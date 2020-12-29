<?php

 $drive = 'G:';  //Drive Name
 printf("Remaining Space : " . round((disk_free_space($drive) / 1048576), 2) . " MB in ($drive drive)");   //full drive space

 echo "<br>";

 echo "Total Space : " . round((disk_total_space($drive) / 1073741824), 2) . " GB in   ($drive drive)";  //unuse file space 

?>
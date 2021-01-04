<?php

 session_start();
 $sid = session_id();
 // Encoded data retrieved from database looks like this:
 //$sessionVars = username|s:5:"jason";loggedon|s:20:"Feb 16 2011 22:32:29";
 session_decode($sessionVars);

 echo "User ".$_SESSION['username']." logged on at ".$_SESSION['loggedon'].".";

?>
<?php

session_start();

printf("Your username is %s.", $_SESSION['username']);
echo "<br>";
printf("Your email is %s.", $_SESSION['email']);
echo "<br>";
printf("Your phone is %s.", $_SESSION['phone']);
echo "<br>";

echo "Session ID: " . session_id();
echo "<br>";

echo "Session Regenerate ID: " . session_regenerate_id();

session_destroy();

?>
<br><br>
<a href="session.php">Session</a>
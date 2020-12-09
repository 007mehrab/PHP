<?

$Sites = array("www.facebook.com","www.twitter.com","www.google.com");

foreach ($Sites as $site) {
    
	print $site . " | "; 
}

?>

<br>

<?

$Sites = array("www.facebook.com","www.twitter.com","www.google.com");

// $Sites = array("<a href='https://www.facebook.com'>facebook</a>,
// <a href='https://www.twitter.com'>twitter</a>,
// <a href='https://www.google.com'>google</a>");

foreach ($Sites as $site) {
    
	print $site . " | "; 
}

?>

<br>


<?

$Sites = array("www.facebook.com","www.twitter.com","www.google.com");

foreach ($Sites as $site) {
    
	$result = "<a href ='https://$site' target = '_blank'>$site</a>"; 
	echo $result. " | ";
}

?>
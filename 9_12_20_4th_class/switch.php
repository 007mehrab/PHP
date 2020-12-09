<?
$catagory = "news";
switch ($catagory) {
	    case 'News':
		echo "What's happening around the world";
		break;

		case 'Weather':
		echo "You weekly forecast";
		break;
	
	    default:
		echo "Welcome to my wabsite";
	}

?>

<br>


<?
$x = 5;

switch ($x) {
	    case 5:
		echo "Good";
		break;

		case 10:
		echo "Very good";
		break;
	
	    default:
		echo "Fail";
	}

?>

<br>

<?php

$x = 5;

switch ($x) {
	    case ($x<5):
		echo "Good";
		break;

		case ($x<10):
		echo "Very good";
		break;
	
	    default:
		echo "Fail";
	}

?>
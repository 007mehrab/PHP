<?= date('l, F n, Y'); ?>

<BR><BR></BR>

<?php

function displayDate(){

	//return date('l-F d,Y');
	//return date('l-F D,Y');
	//return date('l-M D,Z');
 	//return date('A-M D,Y');
 	//return date('g-F D,Y');
	//return date('H-F D,Y');

//Time
	return date('h-i-s :A');

    }

echo displayDate();
?>

<br>
     <h2>Javascript Date</h2>
     <h3>Today Date to one week Later</h3>
<br>

<script>
	var myDate = new Date();
	var get = myDate.getDate()+7;
	//alert(get);
	document.write (get);  //taday date-12 + 7 =19

	//var set = myDate.setDate(myDate.getDate()+7);   //show milisecond date
	//alert(set);
</script>
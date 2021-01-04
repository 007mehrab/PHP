<?php

 $dates = array('10-10-2011', '2-17-2010', '2-16-2011',
 '1-01-2013', '10-10-2012');
 sort($dates);
 echo "<p>Sorting the array using the sort() function:</p>";
 print_r($dates);
 natsort($dates);
 echo "<p>Sorting the array using the natsort() function: </p>";
 print_r($dates);
 // Create function use to compare two date values
 function DateSort($a, $b) {
 // If the dates are equal, do nothing.
 if($a == $b) return 0;
 // Disassemble dates
 list($amonth, $aday, $ayear) = explode('-',$a);
 list($bmonth, $bday, $byear) = explode('-',$b);
 // Pad the month with a leading zero if leading number not present
 $amonth = str_pad($amonth, 2, "0", STR_PAD_LEFT);
 $bmonth = str_pad($bmonth, 2, "0", STR_PAD_LEFT);
 // Pad the day with a leading zero if leading number not present
 $aday = str_pad($aday, 2, "0", STR_PAD_LEFT);
 $bday = str_pad($bday, 2, "0", STR_PAD_LEFT);

 // Reassemble dates
 $a = $ayear . $amonth . $aday;
 $b = $byear . $bmonth . $bday;
 // Determine whether date $a > date $b. Using the spaceship
//operator that return -1, 0 or 1
 // based on the comparison of $a and $b. This requires PHP 7.0 or
//greater.
 return ($a <=> $b);
 }
 usort($dates, 'DateSort');
 echo "<p>Sorting the array using the user-defined DateSort() function: </p>";
 print_r($dates);
 
?>
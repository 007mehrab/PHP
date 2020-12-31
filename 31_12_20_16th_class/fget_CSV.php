<?

// $fh = fopen('contact.txt', 'r');

// $data = fgetcsv($fh, 1024, ',');

// echo "<pre>";
// print_r($data);   //find only one syntex

?>


<?

// $fh = fopen('contact.txt', 'r');

// while ($data = fgetcsv($fh, 1024, ',')) {
// 	foreach ($data as $item) {
// 		echo $item . "<br>";
// 	}
// }

?>


<?

// $fh = fopen('contact.txt', 'r');

// while(list($name, $email, $phone) = fgetcsv($fh, 1024, ',')) {

// 	echo "<pre>";
	
// 	echo "Name: $name Email:$email Phone:$phone <br>";
	
// }

?>



<?

$fh = fopen('contact.txt', 'r');

// echo "<ul>";

// while(!feof($fh)) {

// 	echo "<h1>" . "<li>" . fgets($fh) . "</li>" . "<pre>"  . "</h1>";
// }

// echo "</ul>";



echo "<ul>
  <li>Coffee</li>
  <li>Tea
    <ul>
      <li>Black tea</li>
      <li>Green tea</li>
    </ul>
  </li>
  <li>Milk</li>
</ul>";


fclose($fh);

?>
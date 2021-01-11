<?php

class students{
public $file;
public function __construct($file){
$this->file = $file;
$fh = fopen($file, 'r');
while(!feof($fh)){
$data = fgets($fh);
list($id, $name, $batch) = explode(',', $data);
echo "ID: $id, Name: $name, Batch: $batch <br>";
}
}
}
$myfile = 'myfile.txt';
$obj1 = new students($myfile);


?>


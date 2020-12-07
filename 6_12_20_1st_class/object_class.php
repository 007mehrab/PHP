<?
 class Appliace
 {
 	private $power;
 	function setpower($status)
 	{
 		$this->power = $status;
 	}
 }

 $object = new Appliace;
 $object->setpower(50);
 print_r($object);
 
?>
<?
class student {
  private $name;
   
  public function __construct ($name)
  {
    $this -> name = $name;
  }
    
  public function result()
  {
    return $this -> name;
  }
}
   

$Id = new student("1262364");
echo "ID : ";
echo $Id -> result();

$Name = new student("Mehrab");
echo "<br>Name : ";
echo $Name -> result();

$Batch = new student("Pwad46");
echo "<br>Batch : ";
echo $Batch -> result();

?>
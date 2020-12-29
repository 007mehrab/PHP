
<?php

class Employee1 
{
	private $name;
	function setName($name) {
		$this->name = $name;
	}
	function getName() {
		return $this->name;
	}
}

$emp1 = new Employee1();
$emp1->setName('John Smith');

$emp2 =clone $emp1;
$emp2->setName('Jane');

echo "Employee 1 = {$emp1->getName()} <br>";
echo "Employee 2 = {$emp2->getName()} <br>";

?>

<!-- ===================================== -->

<?php
 class Employee {
 private $employeeid;
 private $tiecolor;
 // Define a setter and getter for $employeeid
 function setEmployeeID($employeeid) {
 $this->employeeid = $employeeid;
 }
 function getEmployeeID() {
 return $this->employeeid;
 }
 // Define a setter and getter for $tiecolor
 function setTieColor($tiecolor) {
 $this->tiecolor = $tiecolor;
 }
 function getTieColor() {
 return $this->tiecolor;
 }
 }

 // Create new Employee object
 $employee1 = new Employee();
 // Set the $employee1 employeeid property
 $employee1->setEmployeeID("12345");
 // Set the $employee1 tiecolor property
 $employee1->setTieColor("red");
 // Clone the $employee1 object
 $employee2= clone $employee1;
 // Set the $employee2 employeeid property
 $employee2->setEmployeeID("67890");
 // Output the $employee1and $employee2employeeid properties
 printf("Employee 1 employeeID: %d <br />", $employee1->getEmployeeID());
 printf("Employee 1 tie color: %s <br />", $employee1->getTieColor());
 printf("Employee 2 employeeID: %d <br />", $employee2->getEmployeeID());
 printf("Employee 2 tie color: %s <br />", $employee2->getTieColor());

?>
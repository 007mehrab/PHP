<?

  $name = $_POST["Name"];
  $designation = $_POST["designation"];
  $basic = $_POST["basic"];
  $house_rent = $_POST["House"];
  $transport = $_POST["transport"];

  $salary = $basic + $house_rent + $transport;

  echo "Name :" . $name . "<br>";
  echo "Designation :" . $designation . "<br>";
  echo "Total Salary :" . $salary;
?>
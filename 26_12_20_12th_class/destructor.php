<?php
class oop{
 public function __construct(){
     echo "Welcome to PHP World!";
 }
public function sayHello(){
     echo "Hello World";
 }
  
 public function __destruct(){        //the last object
     echo "<br>I'm about to disappear - bye bye!";
 }

  public function sayHello1(){
     echo "Hello World";
 }
 
}
$obj=new oop;
 
echo "<br>";
 
$obj->sayHello();
echo "<br>";
$obj->sayHello1();
 
?>
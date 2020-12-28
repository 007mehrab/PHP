<?php

class Visitor
{
	private static $visitors = 0;
	function __construct()
	{
		self::$visitors++;
	}
	static function getVisitors()
	{
		return self::$visitors;
	}
}
 // Instantiate the Visitor class.

$visits = new Visitor();  //1
new Visitor();            //2
new Visitor();            //3

echo Visitor::getVisitors()."<br />";

 // Instantiate another Visitor class.

$visits2 = new Visitor();  //4
echo Visitor::getVisitors()."<br />";

 // Instantiate another Visitor class.

$visits3 = new Visitor();  //5
echo Visitor::getVisitors()."<br />";

?>
<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

interface ImyInterface
{
public myPreDeifinedMethod(); }

class MyBaseClass
{

	private $_my_private_var;
	protected $_my_protected_var;
	public $my_public_var;
	
	
	public function __construct()
	{
		print __Method__ . '<br />';
	}
	
	public function __destruct()
	{
		print __Method__ . '<br />';
		
		$this-> my_protected_var = 'protected';
		$this-> my_private_var = 'private';
		$this-> my_public_var = 'public';	
		
		$this->myPrivateMethod();
		
	}
	
class myChildClass extends myBaseClass
{
	public function __construct()
	{
		print __Method__ . '<br />';
		parent::__construct();
		
	}
	public static function MystaticMethod()
	{
		print __Method__ . '<br />';
	}
}
	
	public function mymethod()
	{
		print __Method__ . '<br />';
	}
	
	public function printMe($ln)
	{
		print $ln. '<br />';
	}
	
	protected function myProtectedMethod()
	{
		print __Method__ . '<br />';
	}
	
	private function myPrivatedMethod()
	{
		print __Method__ . '<br />';
	}
}

$base_class = new MyBaseClass();
$base_class->printMe('hello world');
//$base_class->myProtectedMethod();
//$base_class->myPrivatedMethod();
$child = new MyChildClass();
myChlidClass::MyStaticMethod();

unset($base_class);

print 'bub-bye';

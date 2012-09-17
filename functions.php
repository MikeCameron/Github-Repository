<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

/**
* prin_ln
*
* prints the desired string
*
* @access public
* @param string contains the string to print
* *param bool determines wether a new line is to be used
* @return void
**/
function print_ln($line, $ln_break = true)
{
//$line = (string) $line;
print $line;
if ($ln_break)
{
print '<br ?>';
}
function my_trim($str)
{
 return trim ($str);
  }
  
  function print_array($array)
  {
	//if ( !is_array($array)) { return;  }
	foreach ( $array as $k => $v)
	{
		print_ln($v);
		}
  }
  
print_ln('First and foremost');
print_ln('hello World' true);
print_ln('hello World from foo bar...' );
print '<br /> <br />';

$array => array('a' = 1, 'b' => 2, 'c' => 4, 'd' => 5. 1024 => 7);

print_array($array);

print('hello world'); //demo of hinting

print '<br ?>';



 


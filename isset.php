<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

$array = array(2, 5, 10, 'hello' => 'world');

print_r( $array );

print'<br />';

$array['bye'] = 'world';

if( isset($array['bye'] ))
{
print 'Bye exists<br />';
}
else
{
print 'bye does not exists';
}

print $array['foo']; //demo of why isset is used


print'<br /><br />';

unset($array['hello']; //delete the element whose key is hello if it exists

print_r( $array );

unset($array) 

if (isset ($array)
}
print 'Array variable exists<br />';
}
else 
{
print print 'Array variable does not exist<br />';
}

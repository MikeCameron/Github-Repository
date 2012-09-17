<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

$array = array();
for( $i = 0; $i < 10; ++$i)
{
	$array[] = $i;
}

print '<br />';

print_r( $array ); //dump 

foreach( $array as $key => $value)
{
print $key . ' --> ' . $value . '<br />';
}

print '<br />';

$array['my-key'] = 'my-value';

print_r( $array ); dump to screen
print '<br />';

foreach( $array as $key => $value)
{
print $key . ' --> ' . $value . '<br />';
}

print '<br />';


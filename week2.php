<?php

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

echo "Hello world using the echo language construct!<br />";

//printing numbers 0 to 9 comma seperated
for ( $i = 0; $i < 10; ++$i ) 
{
print $i . ", "; //string concat long form - changing double quotes to single quotes will increase efficiency
//print "{$i}, "; // string concat short form
}
print '<br />';

//printing numbers 0 to 9 comma seperated no last comma
for ( $i = 0; $i < 10; ++$i ) 
{
print $i . ", "; //string concat long form - changing double quotes to single quotes will increase efficiency
//print "{$i}, "; // string concat short form
}
if (i < 9)
{
print ", ";
}
print '<br />';

//Build string variable of 0 to 9 comma seperated no last comma
$string = '';
for( $i = 0; $i <10; ++$i)
{

$string = $string . $i. ', ';
}
print $string . '<br />';

// Trim string here so that no end comma is present
print rtrim($string, ', ');

//short syntax option for printing - not recommended
/* <?= "hello World"; ?> */
print '<br />';
for ( $i =0; $i <10; ++$i)
{
$string .= $i . (9 > $i ? ', ' : '');
}
print 'T-OP: ' . $string . '<br />';

// another control structure for looping ...
$i = 0;
while ($i <= 9)
{
print $i;
if (9 > $i) // not recommended use curly braces
	print ', ';

++$i;
}

?>
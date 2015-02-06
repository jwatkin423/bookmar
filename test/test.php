<?php

echo SALT;

for ($x=0;$x<5;$x++){
	echo crypt("October2014", SALT) . PHP_EOL;

}
$a = 10;

function x(&$argument) {
	$argument += 1;
	return $argument;
}

$b = x($a);

echo "printing: $a";
echo PHP_EOL . "b = " . $b;
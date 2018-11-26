<?php

// Example implentation of a generator using the yield keyword that shows the fibonacci sequence
// http://php.net/manual/en/language.generators.overview.php
// Usage of this script $ php generator.php 100

function iterateFib($iterations){
	
	$last = 0;
	$current = 1;
	yield 1;

	// initialises loop at 2 as we already yield the initial value above
	for ($i = 2; $i <= $iterations; $i++){
		$current = $last + $current;
		$last = $current - $last;
		yield $current;
	}
}

echo "argument value passed $argv[1]\n";

$generator = iterateFib($argv[1]);
foreach ($generator as $value) {
    echo "$value\n";
}
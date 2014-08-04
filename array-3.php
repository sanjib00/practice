<?php

	//comparing array

	$a = array(1,2,3);
	$b = array(1=>2, 2=>3, 0=>1);
	$c = array('a'=>1, 'b'=>2, 'c'=>3);

	var_dump($a == $b); //true
	var_dump($a === $b); //false
	var_dump($a == $c); //false
	var_dump($a);
	var_dump($b);

	var_dump($a != $b); //false
	var_dump($a !== $b); //true

	$d = array();
	$e = 10;
	echo count($a);
	echo count($d);
	echo count($e);

	$t = "Sanjib";

	var_dump($t);

	$xx = count($t);
	echo($xx);
?>
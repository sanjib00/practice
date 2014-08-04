<?php

	$string = "foo" . "bar";
	$string2 = "baz";

	$string .= $string2;

	echo($string)."<br/>";

	$a = 3 + 5;
	$b = 31;

	$a += $b;

	echo($a)."<br/>";

	$x = 16;

	echo $x>>2 ;

	echo "<br/>";

	$y = 23;

	$y += 2;

	echo($y);

	$r = 10;

	$s = $r;

	$s = 20;

	echo($r)."<br/>";

	
	$left = "ABC";
	$right = "ABD";

	echo(int) ($left>$right);

	$t = false;

	echo $t;


?>
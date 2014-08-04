<?php

	$a = array('a'=> 1, 'b'=> 2);

	echo isset($a['a']);
	echo isset($a['b']);
	echo isset($a['c']);

	$r =array('a'=> NULL, 'b' => 2);

	echo isset($r['a']);  //False
	//echo isset($r['b']);

?>
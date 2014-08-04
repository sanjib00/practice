<?php

	$name = 'foo';
	$$name = 'bar';

	echo $name."<br/>";
	echo $foo;

	$number = '123';
	$$number = '456';

	echo ${'123'};

?>
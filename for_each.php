<?php

	$arr = array('foo','bar', 'baz');

	foreach ($arr as  $value) {
		
		echo $value."<br/>";
	}

	$cars = array('volvo'=> 35, 'Dragon' => 20, 'Benz' =>33, 'Corolla'=>100,);
	print_r($cars);

	foreach ($cars  as $name=>$number) {

		echo $name." = ".$number."<br/>";
	}

?>
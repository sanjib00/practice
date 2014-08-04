<?php

	$ages = array('Asif'=> 39, 'Sanjib'=>[18,24], 'Nazrul'=>12);
	print_r($ages['Sanjib']);

	$ages['Sanjib'] = [24,39];
	print_r($ages);
	var_dump($ages);
	echo ($ages['Sanjib'][1]);

	$ages['Asif'] = 75;

	print_r($ages);

?>
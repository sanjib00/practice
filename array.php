<?php

$a = array('4'=>5, 'a'=>'b');
$a[] = 44;

$car = array('volvo','dragon','toyota','Ferari');
$car[3] = 'Honda';
print_r($a);

echo $a['a']."<br/>";

print_r($car);

echo "<br/>";
echo $car[2]." and ".$car[0]." are my car.";

?>
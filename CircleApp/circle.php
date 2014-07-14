<?php

 //declaring a class
class Circle{

public $radius;
public $pi = 3.14;


public function get_circle_area()
{

return $this->radius * $this->radius * $this->pi;

}


}
?>
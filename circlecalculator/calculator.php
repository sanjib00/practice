<?php


class Calculator {
    
    public $radius;
    
    public function get_diameter() {
        
        return 2* $this->radius;
        
    }
    
    public function get_area(){
        
        return pi()*$this->radius*$this->radius;
    }
    
    public function get_perimeter() {
        
        return 2*pi()*$this->radius;
        
    }
   
}

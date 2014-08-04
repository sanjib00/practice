<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calculator
 *
 * @author user
 */
class Calculator {
    
    public $num1;
    public $num2;
    
    public function Add(){
        
        return $this->num1 + $this->num2;
    }
    
    public function Subtract(){
        
        return $this->num1 - $this->num2;
    }
    
    public function Multiply() {
        
        return $this->num1 * $this->num2;
        
    }
    
    public function Division() {
        
        return $this->num1 / $this->num2;
        
    }
    
    public function Mod() {
        
        return $this->num1 % $this->num2;
        
    }
    
}

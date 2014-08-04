<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of person
 *
 * @author user
 */
class Person {
    
    public $first_name;
    public $middle_name;
    public $last_name;
    
    public function get_full_name() {
        
        return $this->first_name.' '.$this->middle_name.' '.$this->last_name;
    }
    
    public function get_reverse_name() {
        
        $fullname = $this->get_full_name();
        $reverse_name = strrev($fullname);
        return $reverse_name;
        
    }
}

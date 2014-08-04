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
    
    private $first_name;
    private $middle_name;
    private $last_name;
    
    function __construct($first_name, $middle_name, $last_name) {
        $this->first_name = $first_name;
        $this->middle_name = $middle_name;
        $this->last_name = $last_name;
    }

    public function set_first_name($new_first_name) {
        $this->first_name = $new_first_name;
    }

    public function set_middle_name($new_middle_name) {
        $this->middle_name = $new_middle_name;
    }

    public function set_last_name($new_last_name) {
        $this->last_name = $new_last_name;
    }
    public function get_first_name() {
        return $this->first_name;
    }

    public function get_middle_name() {
        return $this->middle_name;
    }

    public function get_last_name() {
        return $this->last_name;
    }

    public function get_full_name() {
        
        return $this->first_name. " ".$this->middle_name." ".$this->last_name;
        
    }
    
    public function get_reverse_name() {
        
        $reverse_name = strrev($this->get_full_name());
        return $reverse_name;
       // echo "mmoku";
    }
}

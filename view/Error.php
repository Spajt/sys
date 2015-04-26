<?php
namespace view;
class Error {
    public function __construct() {
        ;
    }
    public function get_header() {
        
    }
    public function get_message() {
       return $this->set_message();
    }
    public function set_message() {
       return "Error no. ". $this->id;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


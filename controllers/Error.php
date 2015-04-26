<?php
namespace controllers;
class Error {
    public function __construct($id) {
        $this->id = $id;
        $this->get_message();
    }
    public function get_message() {
       return $this->set_message();
    }
    public function set_message() {
       return "Error no. ". $this->id;
    }
}
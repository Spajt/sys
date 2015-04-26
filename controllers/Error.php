<?php
namespace controllers;
class Error {
    public function __construct($id) {
        $this->message = "error #".$id;
    }
    public function getMessage() {
        return $this->message;
    }
}
<?php

class Category {
    public $name;

    public function __construct($_name) {
        $this->name = $_name;
    }

    public function getCategoryProduct() {
        
    }
}

class Dog extends Category {
    
}

class Cat extends Category {
    
}
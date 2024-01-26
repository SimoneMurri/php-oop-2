<?php

    class Product {
        public $title;
        public $icon;
        public $price;
        public $img;

        public function __construct($_title, $_icon, $_price, $_img) {
            $this->title = $_title;
            $this->icon = $_icon;
            $this->price = $_price;
            $this->img = $_img;
        }

        public function getPrice() {
            return $this->price;
        }
    }


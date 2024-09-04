<?php

class Product {
    public $name;
    public $price;
    public $img;

    public function __construct(string $_name, float $_price, string $_img){
        $this->name = $_name;
        $this->price = $_price;
        $this->img = $_img;
    }
}
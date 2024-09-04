<?php

class Product {
    public $title;
    public $price;
    public $img;

    public function __construct(string $_title, float $_price, string $_img){
        $this->title = $_title;
        $this->price = $_price;
        $this->img = $_img;
    }
}
<?php

class Product
{
    public $title;
    public $price;
    public $img;
    public $type;
    public $category;

    public function __construct(string $_title, float $_price, string $_img, string $_type, Category $_category)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->img = $_img;
        $this->type = $_type;
        $this->category = $_category;
    }
}

<?php

class Bed extends Product
{

    public $shape;
    public $size;

    public function __construct(string $_title, float $_price, string $_img, string $_type, string $_shape, string $_size, Category $_category)
    {

        parent::__construct($_title, $_price, $_img, $_type, $_category);
        $this->shape = $_shape;
        $this->size = $_size;
    }
}

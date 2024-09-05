<?php

class Food extends Product
{

    public $ageRange = [];
    public $weight;

    public function __construct(string $_title, float $_price, string $_img, string $_type, array $_ageRange, float $_weight, Category $_category)
    {

        parent::__construct($_title, $_price, $_img, $_type, $_category);
        $this->ageRange = $_ageRange;
        $this->weight = $_weight;
    }
}

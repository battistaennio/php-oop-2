<?php

class Food extends Product{

    public $composition;
    public $ageRange = [];
    public $weight;

    public function __construct(string $_title, float $_price, string $_img, string $_composition, array $_ageRange, int $_weight){

        parent::__construct($_title, $_price, $_img);
        $this->composition = $_composition;
        $this->ageRange = $_ageRange;
        $this->weight = $_weight;
    }
}
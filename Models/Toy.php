<?php

class Toy extends Product
{

    public $material;
    public $lifeStage;

    public function __construct(string $_title, float $_price, string $_img, string $_type, string $_material, string $_lifeStage, Category $_category)
    {

        parent::__construct($_title, $_price, $_img, $_type, $_category);
        $this->material = $_material;
        $this->lifeStage = $_lifeStage;
    }
}

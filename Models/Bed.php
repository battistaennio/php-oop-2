<?php

class Bed extends Product
{

    public $shape;
    private $size;

    public function __construct(string $_title, float $_price, string $_img, string $_type, string $_shape, string $_size, Category $_category)
    {

        parent::__construct($_title, $_price, $_img, $_type, $_category);
        $this->shape = $_shape;
        $this->setSize($_size);
    }

    public function setSize($size)
    {
        if ($size != "Piccolo" && $size != "Medio" && $size != "Grande") {
            throw new Exception("La parola '" . $size . "' deve combaciare con 'Piccolo', 'Medio' o 'Grande'");
        }

        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }
}

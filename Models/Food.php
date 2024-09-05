<?php

class Food extends Product
{

    public $ageRange = [];
    private $weight;

    public function __construct(string $_title, float $_price, string $_img, string $_type, array $_ageRange, float $_weight, Category $_category)
    {

        parent::__construct($_title, $_price, $_img, $_type, $_category);
        $this->ageRange = $_ageRange;
        $this->setWeight($_weight);
    }

    public function setWeight($weight)
    {
        if ($weight <= 0 || $weight > 500) {
            throw new Exception("Il peso '" . $weight . "' dell'articolo non può avere un valore negativo o essere superiore a 500");
        }
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}

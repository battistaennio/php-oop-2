<?php

class Product
{
    public $title;
    private $price;
    public $img;
    public $type;
    public $category;

    public function __construct(string $_title, float $_price, string $_img, string $_type, Category $_category)
    {
        $this->title = $_title;
        $this->setPrice($_price);
        $this->img = $_img;
        $this->type = $_type;
        $this->category = $_category;
    }

    public function setPrice($price)
    {
        if ($price <= 0) {
            throw new Exception("Il prezzo non può avere un valore negativo o essere uguale a 0");
        }
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

<?php

include_once "Establishment.php";

class Pit extends Establishment
{
    private $sideLength;


    public function __construct($name, $price, $specialEquipment, $sideLength)
    {
        parent::__construct($name,$price,$specialEquipment);
        $this->sideLength = $sideLength;
    }


    function getArea()
    {
        return 2 * (1 + sqrt(2)) * pow($this->sideLength, 2);
    }

    function getSize()
    {
        return "Sidelength: ".$this->sideLength;
    }
}
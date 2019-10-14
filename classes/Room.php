<?php

include_once "Establishment.php";

class Room extends Establishment
{

    private $width;
    private $length;
    private $height;


    public function __construct($name, $price, $specialEquipment,$width, $length, $height)
    {
        parent::__construct($name,$price,$specialEquipment);
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
    }

    function getArea()
    {
        return $this->width*$this->length;
    }

    function getSize()
    {
        return "width :".$this->length."length :".$this->length."height :".$this->height;
    }
}
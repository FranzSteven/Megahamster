<?php


abstract class Establishment
{

    protected $name;
    protected $price;
    protected $specialEquipment;


    public function getName()
    {
        return $this->name;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function getSpecialEquipment()
    {
        return $this->specialEquipment;
    }


    public function __construct($name, $price, $specialEquipment)
    {
        $this->name = $name;
        $this->price = $price;
        $this->specialEquipment = $specialEquipment;
    }

    abstract function getArea();
    abstract function getSize();


}
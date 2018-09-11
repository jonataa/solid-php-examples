<?php

interface ShapeInterface 
{
    public function area();
}

class Circle implements ShapeInterface 
{
    public $radius;

    public function __construct($radius) 
    {
        $this->radius = $radius;
    }

    public function area() 
    {
        return pi() * pow($this->radius, 2);
    }
}  

class Square implements ShapeInterface 
{
    public $length;

    public function __construct($length) 
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($shape->length, 2);
    }
}
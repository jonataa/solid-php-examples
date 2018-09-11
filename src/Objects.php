<?php

interface ManageShapeInterface
{
    public function calculate();
}

class Square implements ShapeInterface, ManageShapeInterface 
{
    public function area() { /*_Do stuff here_*/ }

    public function calculate() 
    {
        return $this->area();
    }
}

class Cuboid implements ShapeInterface, SolidShapeInterface, ManageShapeInterface 
{
    public function area() { /*_Do stuff here_*/ }
    public function volume() { /*_Do stuff here_*/ }

    public function calculate() 
    {
        return $this->area() + $this->volume();
    }
}  
<?php

// interface ShapeInterface 
// {
//     public function area();
//     public function volume();
// }

interface ShapeInterface 
{
    public function area();
}

interface SolidShapeInterface
{
    public function volume();
}

class Cuboid implements ShapeInterface, SolidShapeInterface 
{
    public function area() 
    {
        // calculate the surface area of the cuboid
    }

    public function volume() 
    {
        // calculate the volume of the cuboid
    }
}
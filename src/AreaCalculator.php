<?php

class AreaCalculator 
{

    protected $shapes;

    public function __construct($shapes = array()) 
    {
        $this->shapes = $shapes;
    }

    public function sum() 
    {
        // logic to sum the areas
        return 100;
    }

    public function output() 
    {
        return "Sum of the areas of provided shapes: " . $this->sum();
    }
}
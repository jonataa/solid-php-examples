<?php

class VolumeCalculator extends AreaCalculator 
{
    public function __construct($shapes = array()) 
    {
        parent::__construct($shapes);
    }

    public function sum() {
        // logic to calculate the volumes and then return and array of output
        return $summedData;
    }
}    
<?php

require_once 'src/AreaCalculator.php';
require_once 'src/Objects.php';

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

$areas = new AreaCalculator($shapes);

echo $areas->output();
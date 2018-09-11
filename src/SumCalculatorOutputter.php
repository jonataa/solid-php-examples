<?php

class SumCalculatorOutputter
{

    protected $calculator;

    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function json()
    {
        $data = ['sum' => $this->calculator->sum()];
        return json_encode($data);
    }

    public function html()
    {
        return implode('', array(
            '',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            ''
        ));
    }

}
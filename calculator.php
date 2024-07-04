<?php

 class Calculator{
    public $num1;
    public $num2;

    public function __construct($num1, $num2){
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function plus($num1, $num2){
        return $this->plus($num1, $num2);
    }
}

$myCalculator = new Calculator(50,60);

echo $myCalculator;
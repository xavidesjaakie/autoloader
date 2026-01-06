<?php
namespace Xxvan\calculatormetautoload\Classes;

class Calculator
{
    public function __construct()
    {
        echo "Calculator class loaded.<br>";
    }

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \Exception("Delen door nul is niet mogelijk!");
        }

        return $a / $b;
    }
}

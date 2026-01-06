<?php

use PHPUnit\Framework\TestCase;
use Project_calculator\Classes\Calculator;

/**
 * Test class voor de Calculator
 * 
 * Deze class test of alle methodes van de Calculator class
 * correct werken met verschillende soorten invoer.
 */
class CalculatorTest extends TestCase
{
    /**
     * Test of de add() methode twee positieve getallen goed optelt
     */
    public function testAddTwoPositiveNumbers()
    {
        // Arrange (Voorbereiden)
        $calculator = new Calculator();
        
        // Act (Uitvoeren)
        $result = $calculator->add(5, 3);
        
        // Assert (Controleren)
        $this->assertEquals(8, $result, "5 + 3 moet 8 zijn");
    }
    
}

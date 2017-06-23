<?php
require 'Calculator.php';
 /*
    Class: CalculatorTests
*/
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
    
    // Function to initiate class Calculator
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
    
    //Function to unset calculator
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
    
    // function to test Add
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    // function to test testisEvenNumber
    public function testisEvenNumber()
    {
        $result = $this->calculator->isEvenNumber(2);
        $this->assertTrue($result);
    }

    // Function to test testisEvenNumber fail condition
    public function testisEvenNumberFail()
    {
        $result = $this->calculator->isEvenNumber(3);
        $this->assertFalse($result);
    }
 
}
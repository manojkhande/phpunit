<?php
require 'Calculator.php';
 
class CalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;
 
    protected function setUp()
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testisEvenNumber()
    {
        $result = $this->calculator->isEvenNumber(2);
        $this->assertTrue($result);
    }

    public function testisEvenNumberFail()
    {
        $result = $this->calculator->isEvenNumber(3);
        $this->assertFalse($result);
    }
 
}
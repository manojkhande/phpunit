<?php
/*
    Class: Calculator
*/
class Calculator
{
	/**
	 * Function add
	 * Use to add two numbers
	 * @param (int) $a and $b
	 * @return (int)
	 */ 
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
	 * Function isEvenNumber
	 * Use to check is number ever or not
	 * @param (int) $number
	 * @return (bool) 
	 */ 
    public function isEvenNumber($number){
		if ($number % 2 == 0) {
		  return true;
		}
		else{
			return false;
		}
    }
 
}
// Class End
?>
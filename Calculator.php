<?php
class Calculator
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function isEvenNumber($number){
		if ($number % 2 == 0) {
		  return true;
		}
		else{
			return false;
		}
    }
 
}
?>
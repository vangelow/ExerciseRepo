<?php
function absolute_values_sum_minimization($A) {
 $number = 0;
 $resultArr= [];
  for ($i=0; $i <count($A) ; $i++) { 
  	 $number = 0;
  	for ($currentNumber=0; $currentNumber <count($A); $currentNumber++) { 
  		$number += abs($A[$i] - $A[$currentNumber]);
  		//echo $number;
  		
  	}

  	$resultArr[] = $number;
  }
  return $A[array_keys($resultArr, min($resultArr))[0]];

}

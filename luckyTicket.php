<?php
function isLucky($ticket){
if(strlen($ticket)!=6){
	return false;
}

	$numberArray = str_split($ticket);
	foreach ($numberArray as $n) {
		if(!(filter_var($n, FILTER_VALIDATE_INT) === 0 || !filter_var($n, FILTER_VALIDATE_INT) === false))
		return false;
		
	}
		array_map('intval', $numberArray);
		$first = array_splice($numberArray, 0,3);
		$second = $numberArray;
	if(array_sum($first)==array_sum($second)){
		return true;
		}
		else {
			return false;
		}
	
  
}

echo isLucky('100001');



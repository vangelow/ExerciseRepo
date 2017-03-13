<?php
function digPow($n, $p) {
    $stringNumber = (string)$n;
    $newNumber = 0;
    for ($i=0; $i < strlen($stringNumber) ; $i++) { 
     $newNumber+= pow(($stringNumber[$i]*1), $p);
     $p++;	
    }
    $stringNumber*=1;
    $result = $newNumber/$stringNumber;
    if(is_int($result)){
    return $result;	
    }
    else {
    	return -1;
    }
    
}

echo digPow(46288, 3);
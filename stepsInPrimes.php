<?php
function isPrime($num)
        {
            for ($i = 2; $i < $num; $i++)
            {
            //	echo $num/$i . PHP_EOL;
                if ($num % $i == 0) 
                { 
                	return false;
                   
                }   
            }
            
                 return true;
        }   
        function step($g, $m, $n) {
    $result = [];
    $finalResult = [];
    for ($i=$m+1; $i < $n ; $i++) { 
    	if(isPrime($i)===true){
    		$result[] = $i;
    
    	}
    }
    for ($i=0; $i < count($result); $i++) { 
    	for ($j=0; $j <count($result) ; $j++) { 
    		if(abs($result[$j]-$result[$i])==$g){
    		$finalResult[] = $result[$i];
    		$finalResult[] = $result[$j];
    		if(count($finalResult)==2){
    	
    			return $finalResult;
    		}
    	}
    	}
    }
}

echo step(4,100,110);
<?php
function chooseBestSum($t, $k, $ls) {
    $maxSumDistance = null;
    $CurrentMaxSumDistance = 0;
    $unsorted = $ls;
    sort($ls);
    
    for ($i=2; $i < count($ls); $i++) { 
    	$CurrentMaxSumDistance=0;
    	for ($j=0; $j < $k; $j++) { 

    		$CurrentMaxSumDistance+=$ls[$i-$j];
    		echo $CurrentMaxSumDistance . PHP_EOL;
    		if($CurrentMaxSumDistance<$t){
    			$maxSumDistance=$CurrentMaxSumDistance;
    		}
    		if($CurrentMaxSumDistance>=$t){
    			continue;
    		}
    	}

    }
    return $maxSumDistance;
}

echo chooseBestSum(163, 3, [50, 55, 56, 57, 58]);
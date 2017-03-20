<?php
function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
	$money = 0;
	$result = [];
	if($startPriceOld>$startPriceNew){
		return 1;
	}
	$i=0;
	while(true){
		$i++;
		if($i%2==0 && $i!=0){
			$percentLossByMonth+=0.5;
		}
    	//echo $percentLossByMonth . PHP_EOL;
		$money+=$savingPerMonth;
		
		$startPriceOld-=$startPriceOld*($percentLossByMonth/100);
		$startPriceNew-=$startPriceNew*($percentLossByMonth/100);
    	//echo $startPriceOld . "<br>";
		
    //	echo $startPriceNew . "<br>";

		if($startPriceOld+$money>=$startPriceNew){
			$result[] = $i;
			$result[] = floor(abs($startPriceOld+$money-$startPriceNew));
			return $result;
		}
		
	}
}
echo nbMonths(2000, 8000, 1000, 1.5);
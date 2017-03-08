<?php
function bits_battle($numbers) {

	$oddsResult= 0;
	$negativeOdds=0;
	$evensResult = 0;
	$negativeEvens=0;
 foreach ($numbers as $number) {
 	if($number!=0){
 	if (abs($number)%2==0) {
 		
 		if($number<0){
 			$binary = decbin(abs($number));
 		//	echo $binary . PHP_EOL;

 		for ($i=0;$i<strlen($binary);$i++) {
 			if($binary[$i]=='1')
 				$evensResult--;
 		}
 	}
 			else if($number>0){
 				
 				$binary = decbin($number);
 			//	echo $binary . PHP_EOL;
 		for ($i=0;$i<strlen($binary);$i++) {
 			if($binary[$i]=='1')
 				$evensResult++;
 		}
 			}
 		
 	}
 	else {

 		if($number<0){
 			
 			$binary = decbin(abs($number));
 		//	echo $binary . PHP_EOL;
 		for ($i=0;$i<strlen($binary);$i++) {
 			if($binary[$i]=='1')
 				$oddsResult--;
 		}
 	}
 			else if($number>0){
 				
 				$binary = decbin($number);
 			//	echo $binary . PHP_EOL;
 		for ($i=0;$i<strlen($binary);$i++) {
 			if($binary[$i]=='1')
 				$oddsResult++;
 		}
 			}
 	}
 }
}
 if($oddsResult>$evensResult){
 //	echo $oddsResult . PHP_EOL . $evensResult;
 	return 'odds win';

 }
 else if($evensResult>$oddsResult){
 	//echo $oddsResult . PHP_EOL . $evensResult;
 	return 'evens win';
 }
 else if($evensResult==$oddsResult || count($numbers)==0){
 	//echo $oddsResult . PHP_EOL . $evensResult;
 	return 'tie';
 }

}

echo bits_battle([7,-3,-2,6]);
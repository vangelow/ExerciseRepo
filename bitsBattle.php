<?php
function bits_battle($numbers) {

	$oddsResult= 0;
	$evensResult = 0;
 foreach ($numbers as $number) {
 	if($number!=0){
 	
 	if ($number%2==0) {
 		$binary = decbin($number);
 		for ($i=0;$i<strlen($binary);$i++) {
 			if($binary[$i]=='0')
 				$evensResult++;
 		}
 	}
 	else {

$binary = decbin($number);

 		for ($i=0;$i<strlen($binary);$i++) {
 			if($binary[$i]=='1')
 				$oddsResult++;
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

echo bits_battle([1, 13, 16]);
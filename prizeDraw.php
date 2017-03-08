<?php 
function rank($st, $we, $n) {
	$namesArray = explode(',', $st);
	//var_dump($namesArray);
	$sumArray = [];
	
 if(strlen($st)==0){
 return 'No participants';
 }
 
 else if (count($namesArray)<$n){
 	return 'Not enough participants';
 }

 else {

 	
	 for ($i=0; $i <count($namesArray); $i++) { 
	 	$count =0;	
	 	$namesArray[$i] = strtolower($namesArray[$i]);
	 	for ($j=0;  $j <strlen($namesArray[$i]); $j++)  { 
	 	$count+=switchLetter($namesArray[$i][$j]);	

	 	
	 	}
	 	//echo $count . PHP_EOL . $we[$i] . PHP_EOL;
	 	$sumArray[$namesArray[$i]] = ($count+strlen($namesArray[$i])) *$we[$i];
	 	
	 }
	 $check=0;
	 $chekcsum=0;
	 foreach ($sumArray as $key => $value) {
	 	
	 	if ($chekcsum==$value){
	 		$check++;
	 	}
	 	$chekcsum = $value;
	 }
	 if($check>0){
	 	ksort($sumArray);
	 }
	 else {
	 arsort($sumArray);	
	 }
	 
	var_dump($sumArray);
	$result = array_keys($sumArray)[$n-1];
//	$result = str_replace($result[0], strtoupper($result[0]), $result);
	return $result;
 }


}

function switchLetter(string $letter) : int{
	$letter = strtolower($letter);
	switch ($letter) {
		case 'a':
                return 1;

                break;
            case 'b':
                return 2;

                break;
            case 'c':
                return 3;

                break;
            case 'd':
                return 4;

                break;
            case 'e':
                return 5;

                break;
            case 'f':
                return 6;

                break;
            case 'g':
                return 7;

                break;
            case 'h':
                return 8;

                break;
            case 'i':
                return 9;

                break;
            case 'j':
                return 10;

                break;
            case 'k':
                return 11;

                break;
            case 'l':
                return 12;

                break;
            case 'm':
                return 13;

                break;
            case 'n':
                return 14;

                break;
            case 'o':
                return 15;

                break;
            case 'p':
                return 16;

                break;

            case 'q':
                return 17;

                break;

            case 'r':
                return 18;

                break;

            case 's':
                return 19;

                break;

            case 't':
                return 20;

                break;

            case 'u':
                return 21;

                break;

            case 'v':
                return 22;

                break;

            case 'w':
                return 23;

                break;

            case 'x':
                return 24;

                break;

            case 'y':
                return 25;

                break;

            case 'z':
                return 26;
	}
	}

echo rank("COLIN,AMANDBA,AMANDAB,CAROL,PauL,JOSEPH", [1, 4, 4, 5, 2, 1], 4);

<?php
function longest($a, $b) {
	$arrOne = str_split($a);
	sort($arrOne);
	$check = '';
	$resultArrOne = [];
	foreach ($arrOne as $element) {
		if($check==$element){
			continue;
		}
		else {
			$resultArrOne[] = $element;
			$check = $element;
		}

	}
	$resultStringOne = implode('', $resultArrOne);
	$arrTwo = str_split($b);
	sort($arrTwo);
	$check = '';
	$resultArrTwo = [];
	foreach ($arrTwo as $element) {
		if($check==$element){
			continue;
		}
		else {
			$resultArrTwo[] = $element;
			$check = $element;
		}

	}
	$resultStringTwo = implode('', $resultArrTwo);

	if(strlen($resultStringOne)>strlen($resultStringTwo)){
		return $resultStringOne;
	}
	else {
		return $resultStringTwo;
	}
}
echo longest("loopingisfunbutdangerous", "lessdangerousthancoding");
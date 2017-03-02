<?php

function printerError($s) {
    $counter = 0;
	$stringLenght = strlen($s);
	for ($i=0; $i < $stringLenght; $i++) { 
		for ($j=ord('n'); $j <=ord('z') ; $j++) { 
			if (ord($s[$i])==$j) {
				$counter++;
			}
		}
	}
	return $counter . '/' . $stringLenght;
}
echo printerError('kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz');
<?php
function calc($s) {
	$totalFirst = '';
  for ($i=0; $i < strlen($s) ; $i++) { 
  	$totalFirst.=ord($s[$i]);
  }

$totalSecond = str_replace('7', '1', $totalFirst);
//return filter_var($totalFirst, FILTER_VALIDATE_INT) . filter_var($totalSecond, FILTER_VALIDATE_INT);
return intval($totalFirst) - intval($totalSecond);
}

echo calc('ABC');

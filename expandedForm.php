<?php
function expanded_form(int $n): string {
  $counter = '1';
  $result = [];
  $n = (string)$n;
for ($i=strlen($n)-1; $i >=0 ; $i--) { 
	if($n[$i]=='0'){
		$counter.='0';
		continue;
		
	}
	
	$result[] = $n[$i]*$counter;
	$counter.='0';
}


$result = array_reverse($result);
$result = implode(' + ', $result);
return $result;

}
echo expanded_form(70304);


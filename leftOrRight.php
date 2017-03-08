<?php
function balance(string $l, string $r) {
	$left = countBalance($l);
	$right = countBalance($r);
	
if($right>$left){
	return 'Right';
}
else if($left>$right){
	return 'Left';
}
else if($left==$right){
	return 'Balance';
}
  
}

function countBalance(string $str){
$heaviness = 0;
for($i=0;$i<strlen($str);$i++){
  if($str[$i]=='!'){
    $heaviness+=2;
    }
    else if($str[$i]=='?'){
    $heaviness+=3;  
    }
    
  }
  return $heaviness;
}

echo balance("!!", "??");
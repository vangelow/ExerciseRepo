<?php
function bingo(array $ticket, int $win): string {
  $miniWins=0;
  foreach ($ticket as $arr) {
  	for ($i=0; $i < strlen($arr[0]) ; $i++) { 
  		if(ord($arr[0][$i])==$arr[1]){
      
  			$miniWins++;
  			break;
  		}

  	}
  	
  }
  if($miniWins>=$win){
  		return 'Winner!';
  	}
  	else {
  		return 'Loser!';
  	}
}

echo bingo([['ABC', 65], ['HGR', 74], ['BYHT', 74]], 1);
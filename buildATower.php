<?php 
function tower_builder(int $n): array {
  $floor=1;
  $array =[];
  for ($i=0; $i < $n; $i++) { 

  	$array[$i] = str_repeat('*', $floor); 
  	$floor+=2;
  $array[$i] = str_repeat(' ', $n-1-$i) . $array[$i] . str_repeat(' ', $n-1-$i); 
  }
  return $array;
}
var_dump(tower_builder(5)); 

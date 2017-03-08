<?php 
function count_smileys($arr): int {
  $counter=0;
  	$eyes = [';', ':'];
  	$noses = ['-','~'];
  	$smiles = [')','D'];

  	foreach ($arr as $smiley) {
  		if(strlen($smiley)>2){
  			if(in_array($smiley[0], $eyes) &&
  			 in_array($smiley[1], $noses) &&
  			 in_array($smiley[2], $smiles))
  			{
  				$counter++;
  			}
  		}
  		else {
if(in_array($smiley[0], $eyes) && 
	in_array($smiley[1], $smiles))
  			{
  				$counter++;
  			}
  		}
  	}
  	return $counter;
}
echo count_smileys([';]', ':[', ';*', ':$', ';-D']);
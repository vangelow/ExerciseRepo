<?php
function comp($a1, $a2) {

sort($a1);
    sort($a2);

    $checker=0;

    for($i=0;$i<count($a1);$i++){
        if($a1[$i]==sqrt($a2[$i]))
        {
            $checker++;
        }

    }
    if($checker==count($a1)){
        return true;
    }
    else return false;

}
echo comp([1,2,3], [9,1,4]);



<?php
function nbYear($p0, $percent, $aug, $p) {
    $i = 0;
    $newPercent = $percent/100;
    while($p0<$p){
        $p0+=($p0*$newPercent) +$aug;
        $i++;

    }

    return $i;
}

echo nbYear(1500, 5, 100, 5000);
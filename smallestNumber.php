<?php
function smallest($n) {
    $n .='';
    $min = PHP_INT_MAX;
    $pos = 0;
    for($i=0;$i<strlen($n);$i++){

            if($n[$i]<$min && $n[$i]!='0'){
                $min = $n[$i];
                $pos = $i;
        }

    }
    
    echo $min;
}
smallest(2014213);
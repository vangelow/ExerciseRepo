<?php
/* function longestConsec($strarr, $k) {

    $maxSeq=0;
    $string = '';

for($i=0;$i<count($strarr)-1;$i++){
    $resultString = strlen($strarr[$i] . $strarr[$i+1]);

    if($resultString>$maxSeq){
        $maxSeq=$resultString;


        $string = $strarr[$i] . $strarr[$i+1];
    }

    }
    if(strlen($string)==0 || $k>strlen($string) || $k<=0){
        return "";
    }
    else return $string;
}
*/
function longestConsec($strarr, $k) {
    $longest = '';

    for ($i = 0; $i <= count($strarr) - $k; $i++) {
        $string = '';

        for ($j = 0; $j < $k; $j++) {
            $string .= $strarr[$i + $j];
        }

        if (strlen($string) > strlen($longest)) {
            $longest = $string;
        }
    }

    return $longest;
}


echo longestConsec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2);
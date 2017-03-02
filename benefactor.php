<?php
/*function newAvg($arr, $newavg) {
    $calculation = array_sum($arr)/count($arr);
     $number = ceil(((($newavg*(count($arr)+1)-$calculation*count($arr)))));
    if($number<0){
       throw new InvalidArgumentException('Number must be positive.');

    }
    else {
        return $number;
    }
}
echo newAvg([14, 30, 5, 7, 9, 11, 16], 90);
*/
function newAvg($arr, $newavg) {
    if(count($arr)==0){
        $arr[]=0;
        $calculation = array_sum($arr)/count($arr);
        $number = ceil(((($newavg*(count($arr))-$calculation*(count($arr)-1)))));
        if($number<=0){
            throw new InvalidArgumentException('Number must be positive.');

        }
        else {
            return $number;
        }
    }
    else {
        $calculation = array_sum($arr)/count($arr);
        $number = ceil(((($newavg*(count($arr)+1)-$calculation*count($arr)))));
        if($number<=0){
            throw new InvalidArgumentException('Number must be positive.');

        }
        else {
            return $number;
        }
    }
}
echo newAvg([14, 30, 5, 7, 9, 11, 16], 90);
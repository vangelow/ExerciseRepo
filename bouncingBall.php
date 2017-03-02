<?php
function bouncingBall($h, $bounce, $window) {
    if($h <= 0 || $bounce >= 1 || $bounce <= 0 || $h == $window){
        return -1;
    }else{
        $i = 1;
        $h *= $bounce;
        while($h > $window){
            $i +=2;
            $h *= $bounce;
        }
        return $i;
    }
}


echo bouncingBall(30.0,0.66 ,1.5);
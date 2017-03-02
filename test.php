<?php

function accum($input)
{
    $result = '';
    for ($i = 0; $i < strlen($input); $i++) {
        $secondLoopCount = $i + 1; //1
        for ($j = 0; $j < $secondLoopCount; $j++) {
            if ($j == 0) {
                $result .= strtoupper($input[$i]);
            } else  {
                $result .= strtolower($input[$i]);
            }

        }
        if ($i!=strlen($input)-1) {
            $result .= '-';
        }

    }
    return $result;
}

$input ='EvidjUnokmMsdkWenksdnowEKLWdslahw';
echo accum($input);
// E-Vv-Iii-Dddd-Jjjjj-Uuuuuu-Nnnnnnn-Oooooooo-Kkkkkkkkk-Mmmmmmmmmm-Mmmmmmmmmmm


<?php
function duplicate_encode($word){
    $word = strtolower($word);
    $resultString = '';
    $checker = 0;
    for($i=0;$i<strlen($word);$i++){
        $checker=0;
        for($j=0;$j<strlen($word);$j++)
        {
           if($word[$i]==$word[$j]){
               $checker++;
           }
        }
        if($checker>1){
            $resultString.=')';
        }
        else $resultString.='(';

    }

    return $resultString;

}

echo duplicate_encode('dinN');
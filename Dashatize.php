<?php
function dashatize(int $num): string {
    $num = str_replace(['1','3','5','7','9'],['-1-','-3-','-5-','-7-','-9-'],(string)$num);
    $num = str_replace('--','-', $num);
    return trim($num,'-');



}
dashatize(1231241);
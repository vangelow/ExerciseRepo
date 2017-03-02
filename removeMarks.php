<?php
function remove(string $s): string {
    if($s[strlen($s)-1]=='!'){
        $s = substr($s, 0, -1);
    }

    return $s;
}

echo remove('Hi!!!');
<?php
function remove(string $s): string
{
    $count = 0;
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == '!') {
            $count++;
        }
    }
    $s = str_replace('!', '', $s);
    return $s .= str_repeat('!', $count);
}
<?php
function toNumberArray(array $stringArray) : array {
    return $x = array_map('intval', $stringArray);
}

var_dump(toNumberArray(["1.1","2.2","3.3"]))
;
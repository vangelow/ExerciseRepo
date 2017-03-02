<?php
function timeCorrect($timestring) {
    if (is_null($timestring)) {
      return null;
    }
    if (empty($timestring)) {
      return '';
    }
    if (!preg_match('/^\d{2}\:\d{2}\:\d{2}$/', $timestring)) {
      return null;
    }
    
    list($h, $m, $s) = explode(':', $timestring);
    $time = $h*3600 + $m*60 + $s;

    return date('H:i:s', $time);
}
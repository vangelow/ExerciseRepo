<?php
function find_missing_letter(array $array) {
  $arr = range('A', 'Z');

 $result = array_diff($arr, $array);

 var_dump($result);

}
find_missing_letter(['O','Q','R','S']);
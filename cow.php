<?php
function count_cows($year) {
  // $year : age de la vache Eve
  if (!is_int($year)) return null;
  
  if ($year < 3) return 1;

  return count_cows($year-3)+count_cows($year-1);  
}
echo count_cows(10);
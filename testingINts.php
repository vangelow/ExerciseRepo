<?php
function listSquared($m, $n)
{

    if ($m >= 1 && $n >= $m) {
        $counter = 0;
        $result = [];
        $divisors = array();
        for ($i = $m; $i <= $n; $i++) {
            //$number = arrayOfDivisors($i);

            $divisors = array();
            for ($j = 1; $j <= $i; $j++) {

                if ($i % $j == 0) {
                    $divisors [] = $j * $j;
                }
            }


            $sum = array_sum($divisors);

            if (is_int(filter_var(sqrt($sum), FILTER_VALIDATE_INT))) {
                $result[] = $arrayName = array('0' => $i, '1' => $sum);

                $counter++;

            }
        }
        if ($counter == 0) {
            return array();
        }
        return $result;
    }
}
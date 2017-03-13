<?php

function maze_runner($maze, $directions)
{
    $startingPoint['row'] = 0;
    $startingPoint['col'] = 0;
    $maxSize = count($maze);

    for ($row = 0; $row < count($maze); $row++) {

        for ($col = 0; $col < count($maze[$row]); $col++) {

            if ($maze[$row][$col] == 2) {
                $startingPoint['row'] = $row;
                $startingPoint['col'] = $col;


            }
        }
    }


    //echo $startingPoint['row'] . PHP_EOL . $startingPoint['col'];
    for ($i = 0; $i < count($directions); $i++) {
        //	echo $maze[$startingPoint['row']][$startingPoint['col']];
        if ($directions[$i] == 'N') {
            $startingPoint['row']--;
        }
        if ($directions[$i] == 'S') {
            $startingPoint['row']++;
        }
        if ($directions[$i] == 'W') {
            $startingPoint['col']--;
        }
        if ($directions[$i] == 'E') {
            $startingPoint['col']++;
        }
        if ($startingPoint['row'] < 0 || $startingPoint['row'] >= $maxSize || $startingPoint['col'] < 0 || $startingPoint['col'] >= $maxSize || $maze[$startingPoint['row']][$startingPoint['col']] == 1) {

            return 'Dead';
        } else if ($maze[$startingPoint['row']][$startingPoint['col']] == 3) {

            return 'Finish';
        } 
    }
    if ($maze[$startingPoint['row']][$startingPoint['col']] == 0 || $maze[$startingPoint['row']][$startingPoint['col']]==2) {
            return 'Lost';

        }


}

$maze = [[1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 3],
    [1, 0, 1, 0, 1, 0, 1],
    [0, 0, 1, 0, 0, 0, 1],
    [1, 0, 1, 0, 1, 0, 1],
    [1, 0, 0, 0, 0, 0, 1],
    [1, 2, 1, 0, 1, 0, 1]];


$direction = ["N","N","N","N","N","E","E","S","S","S","S","S","S"];

echo maze_runner($maze, $direction);
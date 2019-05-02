<?php

function slot_run($size) {
    $array = [];

    for ($horizontal = 0; $horizontal < $size; $horizontal++) {
        $row = [];

        for ($vertical = 0; $vertical < $size; $vertical++) {
            $row[] = rand(0, 1);
        }
        $array[] = $row;
    }

    return $array;
}

var_dump(slot_run(15));



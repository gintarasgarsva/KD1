<?php

function slot_run($skaicius) {
    $array = [];

    for ($horizontal = 0; $horizontal < $skaicius; $horizontal++) {
        $row = [];

        for ($vertical = 0; $vertical < $skaicius; $vertical++) {
            $row[] = rand(0, 1);
        }
        $array[] = $row;
    }

    return $array;
}

var_dump(slot_run(5));



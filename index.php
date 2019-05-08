<?php

$array = ['b', 'x', 'x', 'b', 's'];

function count_values($array, $val) {
    $atrinktieji = 0;
    foreach ($array as $value) {
        if ($value == $val) {
            $atrinktieji++;
        }
    }
    return $atrinktieji;
}

print count_values($array, 'x');


function change_value(&$array, $val_from, $val_to) {
    
    $newArray = [];
    foreach ($array as &$value) {
        if ($value == $val_from) {
            $value = $val_to;
            $newArray[] = $value;
        } else{
            $newArray[] = $value;
        }
    }
    
}

change_value($array, 'x', 'M');

var_dump($array);

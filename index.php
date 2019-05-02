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

function winning_slot($matrix) {
    $winning_rows = [];

    foreach ($matrix as $index => $row) {
        $row_winning_sum = count($row);
        $column_sum = 0;

        foreach ($row as $column) {
            $column_sum += $column;
        }
        if ($row_winning_sum == $column_sum) {
            $winning_rows[] = $index;
        }
        if ($column_sum == 0) {
            $winning_rows[] = $index;
        }
    }

    return $winning_rows;
}

$array1 = slot_run(3);
$winning_rows = winning_slot($array1);
var_dump($winning_rows);

$winning = count($winning_rows);
if ($winning > 0) {
    $text = "Ura! Tau iskrto net $winning laimingos eilutes!!!";
} else {
    $text = 'pz2a nieko nelaimejai:(';
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>KUBIKAI</title>
        <!--    <meta http-equiv="refresh" content="1"> -->
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            .div{
                width: 800px;
                margin-left: 30%;
            }
            .blue{
                border: 1px solid black;
                background-color: blue;
                width: 50px;
                height: 50px;
                display:inline-block;


            }
            .yellow{
                border: 1px solid black;
                background-color: yellow;
                width: 50px;
                height: 50px;
                display:inline-block;

            }
        </style>
    </head>
    <body>
        <div class="div">

            <p>
                <?php print $text; ?>
            </p>

            <?php foreach ($array1 as $index): ?>
                <section>
                    <?php foreach ($index as $value): ?>
                        <?php if ($value): ?>
                            <div class="blue"></div>
                        <?php else: ?>
                            <div class="yellow"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </section>
            <?php endforeach; ?>
        </div>
    </body>
</html> 



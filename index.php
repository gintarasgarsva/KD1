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

$array1 = slot_run(15);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>KUBIKAI</title>
        <meta http-equiv="refresh" content="1" >
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
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
    </body>
</html> 



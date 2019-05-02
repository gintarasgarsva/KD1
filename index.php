<?php

function slot_run() {
    $array = [
        [rand(0, 1), rand(0, 1), rand(0, 1)],
        [rand(0, 1), rand(0, 1), rand(0, 1)],
        [rand(0, 1), rand(0, 1), rand(0, 1)]
    ];
    return $array;
}

$array1 = slot_run();
?>

<!DOCTYPE html>
<html>
    <head>
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
                    <?php if ($value > 0): ?>
                        <div class="blue"></div>
                    <?php else: ?>
                        <div class="yellow"></div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </section>
        <?php endforeach; ?>


    </body>
</html>


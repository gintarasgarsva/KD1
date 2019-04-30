<?php
$daiktai = [
    [
        'name' => 'Kremas',
        'size' => 'x',
        'color' => 'y',
    ],
    [
        'name' => 'Riesutai',
        'size' => 'x',
        'color' => 'y',
    ],
    [
        'name' => 'Raktai',
        'size' => 'x',
        'color' => 'y',
    ],
    [
        'name' => 'Telefonas',
        'size' => 'x',
        'color' => 'y',
    ],
    [
        'name' => 'Lupdazis',
        'size' => 'x',
        'color' => 'y',
    ],
    [
        'name' => 'Vaistai',
        'size' => 'x',
        'color' => 'y',
    ],
    [
        'name' => 'Kojines',
        'size' => 'x',
        'color' => 'y',
    ],
];

$daiktai['color']['y'] = rand(0, 1);
if ($daiktai['color']['y'] > 0) {
    $color = 'Sviesus';
} else {
    $color = 'Tamsus';
}
$size = rand(50, 300);
$daiktai['size']['x'] = $size;

$random_name = $daiktai[rand(0, 6)];
$name = $random_name['name'];

$rankinuko_turis = rand(100, 1000);

$text = "$name uzima $size cm3, Daiktas $color";

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>

        </style>
    </head>
    <body>
        <p><?php print $text; ?></p>
    </body>
</html>
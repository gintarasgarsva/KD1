<?php

$catalog = [
    [
        'name' => 'Batas',
        'price' => 20,
        'content' => 'Rudi batai iš naturalios kiaulės odos.',
        'discount' => 20,
    ],
    [
        'name' => 'Striukė',
        'price' => 75,
        'content' => 'Odinė striukė iš veršelio odos.',
        'discount' => 5,
    ],
    [
        'name' => 'Džinsai',
        'price' => 45,
        'content' => 'Plėšyti džinsai.',
        'discount' => 25,
    ],
    [
        'name' => 'Kepurė',
        'price' => 15,
        'content' => 'Pavasarinė kepurė',
        'discount' => 5,
    ],
    [
        'name' => 'Pirštinės',
        'price' => 22,
        'content' => 'Medžiaginės pirštinės',
        'discount' => 35,
    ],
];

foreach ($catalog as $index => $value) {
        $catalog[$index]['discount_price'] = $catalog[$index]['price'] * 
            (100 - $catalog[$index]['discount']) / 100;
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hey Hey</title>
    <style>
        .produktas {
            display: flex;
            height: 50px;
            text-align: center;
            font-weight: bold;
        }

        .block {
            border: 1px solid black;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<?php foreach ($catalog as $product): ?>
    <div class="produktas">
        <span class="block">
            <?php print $product['name']; ?>
        </span>
        <span class="block">
            <?php print $product['price'] . ' Eur.'; ?>
        </span>
        <span class="block">
            <?php print $product['content']; ?>
        </span>
        <span class="block">
            <?php print $product['discount'] . ' %'; ?>
        </span>
        <span class="block">
            <?php print $product['discount_price'] . ' Eur.'; ?>
        </span>
    </div>
<?php endforeach; ?>
</body>
</html>


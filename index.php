<?php

$situacijos = [
    'level_1' => [
        'Nieko neivyko',
        'Neissimiegojau',
        'Pramiegojau',
        'Pasibaige dantu pasta',
        'Pasibaige arbata',
    ],
    'level_2' => [
        'Kaimynas su bulka buksuoja i kalniuka',
        'Kaimynas uzsikure trimeri po langais ankstu ryta',
        'Tuscias bakas salerkos',
        'Reikejo eiti is namu per lietu',
        'Rajonski po langais garsiai klauso shansono',
    ],
    'level_3' => [
        'Neuzsikure kibiras nes lauke -30',
        'Nedavei rukyt bachurams, gavai streliu',
        'Gavai bauda uz rukyma balkone',
        'Nusijobinai paslydes ant ledo',
        'Xujova po pjankes',
    ],
    'level_4' => [
        'Pana pripyle benzo i mano dyzeline masina',
        'Dushmanas ivairavo savo pasata i mano masina',
        'Einant pro stoti namo susparde bomzai',
        'Nizahuj isveze mentai',
        'Po baliaus neprisimeni kur pasistatei masina',
    ],
];

foreach ($situacijos['level_1'] as $key => $situacija) {
    $key = rand(0, 4);
};
$textlvl_1 = $situacijos['level_1'][$key];

foreach ($situacijos['level_2'] as $key => $situacija) {
    $key = rand(0, 4);
};
$textlvl_2 = $situacijos['level_2'][$key];

foreach ($situacijos['level_3'] as $key => $situacija) {
    $key = rand(0, 4);
};
$textlvl_3 = $situacijos['level_3'][$key];

foreach ($situacijos['level_4'] as $key => $situacija) {
    $key = rand(0, 4);
};
$textlvl_4 = $situacijos['level_4'][$key];

$pz2a_level = rand(0, 4);

if ($pz2a_level == 0) {
    $level_1 = null;
    $level_2 = null;
    $level_3 = null;
    $level_4 = null;
    $textlvl_1 = null;
    $textlvl_2 = null;
    $textlvl_3 = null;
    $textlvl_4 = null;
} elseif ($pz2a_level <= 1) {
    $level_1 = 'lygis-1-green';
    $level_2 = null;
    $level_3 = null;
    $level_4 = null;
    $textlvl_2 = null;
    $textlvl_3 = null;
    $textlvl_4 = null;
} elseif ($pz2a_level <= 2) {
    $level_1 = 'lygis-1-green';
    $level_2 = 'lygis-1-green';
    $level_3 = null;
    $level_4 = null;
    $textlvl_3 = null;
    $textlvl_4 = null;
} elseif ($pz2a_level <= 3) {
    $level_1 = 'lygis-1-green';
    $level_2 = 'lygis-2-green';
    $level_3 = 'lygis-2-orange';
    $level_4 = null;
    $textlvl_4 = null;
} elseif ($pz2a_level == 4) {
    $level_1 = 'lygis-1-green';
    $level_2 = 'lygis-2-green';
    $level_3 = 'lygis-3-orange';
    $level_4 = 'lygis-4-red';
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PZ2A-Meter</title>
        <style>
            .apskritimas{
                border-radius: 50%;
                width:60px;
                height:50px;
                background-color:green;
                display:inline-block;
                text-align: center;
                padding-top:20px;
                font-size:25px;
                color:white;
            }
            #lygis-1, #lygis-2, #lygis-3, #lygis-4{
                border:1px solid grey;
                width:100px;
                height:40px;
                display:inline-block;
                text-align: center;
                padding-top:15px;
                font-size:30px;
                color:white;
            }
            .lygis-1-green{
                border:1px solid green;
                background-color:green;
                width:100px;
                height:40px;
                display:inline-block;
                text-align: center;
                padding-top:15px;
                font-size:30px;
            }
            .lygis-2-green{
                border:1px solid green;
                background-color:green;
                width:100px;
                height:40px;
                display:inline-block;
                text-align: center;
                padding-top:20px;
                font-size:30px;
            }
            .lygis-3-orange{
                border:1px solid orange;
                background-color:orange;
                width:100px;
                height:40px;
                display:inline-block;
                text-align: center;
                padding-top:20px;
                font-size:30px;
            }
            .lygis-4-red{
                border:1px solid red;
                background-color:red;
                width:100px;
                height:40px;
                display:inline-block;
                text-align: center;
                padding-top:20px;
                font-size:30px;
            }
            .lvl_1{
                font-size: 20px;
                color:green;
                te: none;
            }
            .lvl_2{
                font-size: 20px;
                color:green;
            }
            .lvl_3{
                font-size: 20px;
                color:orange;
            }
            .lvl_4{
                font-size: 20px;
                color:red;
            }
            body{
                text-align: center;
                margin-top: 100px;
            }
            .text{
                text-align: left;
                margin-left: 37%;
            }
        </style>
    </head>
    <body>
        <h1>PZ2A-METER</h1>
        <div class="apskritimas">0</div>
        <div id="lygis-1" class="<?php print $level_1; ?>">PX</div>
        <div id="lygis-2" class="<?php print $level_2; ?>">BL</div>
        <div id="lygis-3" class="<?php print $level_3; ?>">NX</div>
        <div id="lygis-4" class="<?php print $level_4; ?>">PZ2A</div>
        <div class="text">
            <ul>
                <li class="lvl_1"><?php print $textlvl_1; ?></li>
                <li class="lvl_2"><?php print $textlvl_2; ?></li>
                <li class="lvl_3"><?php print $textlvl_3; ?></li>
                <li class="lvl_4"><?php print $textlvl_4; ?></li>
            </ul>
        </div>
    </body>
</html>


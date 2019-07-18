<?php

// Uzkraunam visus reikalingus failus
require '../config.php';
require ROOT . '/functions/file.php';
require ROOT . '/functions/html/builder.php';
require ROOT . '/functions/form/core.php';


class ThailandSurprise {
    public $clothes;
    private $balls;

    public function __construct($clothes, $balls){
        $this->clothes = $clothes;
        $this->balls = $balls;
    }
}
$belekas = rand(true, false);
$clothes = new ThailandSurprise('miniskirt', $belekas);

$balls = new ThailandSurprise('miniskirt', $belekas);

var_dump($clothes, $balls);

///////////////////////////////////////////////////////////////

// kitas budas be konstruktoriaus:

//class ThailandSurprise1 {
//    public $clothes;
//    
//}
//
//$transvestitas = new ThailandSurprise1();
//$transvestitas->clothes = 'Miniskirt';
//
//var_dump($transvestitas);



?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome To PHP FightClub!</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
        <script src="media/js/app.js"></script>    
    </head>
    <body>

        
        
      
    </body>
</html>

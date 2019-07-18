<?php

// Uzkraunam visus reikalingus failus
require '../config.php';
require ROOT . '/functions/file.php';
require ROOT . '/functions/html/builder.php';
require ROOT . '/functions/form/core.php';


class ThailandSurprise {
    public $clothes;
    
    public function __construct($clothes){
        $this->clothes = $clothes;
    }
}

$clothes = new ThailandSurprise('miniskirt');

var_dump($clothes);








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

<?php

$text = "blt tas gaidys uzpiso mane.";
$keiksmai = ['blt', 'uzpiso'];
$cenzura = ['***', '******'];

$new_text = str_replace($keiksmai, $cenzura, $text);

print $new_text;
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
          
        </style>
    </head>
    <body>
      
    </body>
</html>


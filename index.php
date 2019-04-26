<?php

    $mano_atmintis = [
	    'Penktadienis',
	    'Paskaita',
	    'Baras',
	    'Viskis',
	    'Alus',
	    'Degtine',
	    'Alus',
	    'Pirmadienis',
	    'Paskaita'
    ];
    $draugo_atmintis = [
            'Penktadienis',
            'Rytas',
            'Baras',
            'Viskis',
            'Alus',
            'Degtine',
            'Alus',
            'Degtine',
            'Samagonas',
            'Antradienis'
    ];
    $rand_flashback1 = rand(0, count($draugo_atmintis) - 1);
    $flashback_text1 = '#' .$rand_flashback1 . ': ' . $draugo_atmintis[$rand_flashback1] ;
        
    $rand_flashback = rand(0, count($mano_atmintis) - 1);
    $flashback_text = '#' .$rand_flashback . ': ' . $mano_atmintis[$rand_flashback] ;
        
    $bendri_atsiminimai = array_intersect( $mano_atmintis, $draugo_atmintis);
        
?>
<!DOCTYPE html>
<html>
<head>
	<title>PENKTADIENIS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Kas buvo penktadienį ?!</h1>
	<h2>Mano atmintis</h2>
        <ul> <!-- foreach -->
            <?php foreach($mano_atmintis as $value): ?>
            <li> 
                <?php print $value; ?>
            </li>
            <?php endforeach; ?>
        </ul><!-- endforeach -->
        <h2>Draugo Atmintis</h2>
        <ul> <!-- foreach -->
            <?php foreach($draugo_atmintis as $value): ?>
            <li> 
                <?php print $value; ?>
            </li>
            <?php endforeach; ?>
        </ul><!-- endforeach -->
        <h3>Sutape prisiminimai:</h3>
        <ul> <!-- foreach -->
            <?php foreach($bendri_atsiminimai as $value): ?>
            <li>
               <?php print $value; ?>
            </li>
            <?php endforeach; ?>
        </ul> <!-- endforeach -->
	<?php print 'Mano flashback' . $flashback_text . "<br>"; ?>
        <?php print 'Draugo flashbackas' . $flashback_text1; ?>
</body>
</html>
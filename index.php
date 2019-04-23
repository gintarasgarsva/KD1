<?php

$weeks = 52.14;
$cizos_mon_thu = rand(60, 80);
$cizos_fri = rand(20, 40);
$cizos_sat_sun = rand(10, 30);
$pakelio_kaina = 4.20;

$viso_vnt = ($cizos_mon_thu + $cizos_fri + $cizos_sat_sun) * $weeks;
$viso_kaina = ($viso_vnt / 20) * 4.20;
$mon_thu_kaina = (($cizos_mon_thu * $weeks) / 20) * 4.20;

print "Per metus surukysiu $viso_vnt cigareciu uz $viso_kaina eur.<br><br>";

print "Nerukydamas Pirmadieni-Ketvirtadieni sutaupyciau $mon_thu_kaina euru.";

?>

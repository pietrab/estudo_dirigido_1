<?php

print "Escreva o número de dias ";
$dias = (int) fgets (STDIN);
$seg1 = ($dias*86400);

print "Escreva o número de horas ";
$horas = (int) fgets (STDIN);
$seg2 = ($horas*3600);

print "Escreva o número de minutos ";
$minutos = (int) fgets (STDIN);
$seg3 = ($minutos*60);

print "Escreva o número de segundos ";
$seg4 = (int) fgets (STDIN);

$totalsegundos = ($seg1 + $seg2 +$seg3 + $seg4);

print "Total de segundos foi $totalsegundos \n";
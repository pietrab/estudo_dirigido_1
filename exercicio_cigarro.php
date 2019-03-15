<?php

print "quantos cigarros você fuma por dia: ";
$cigarros_por_dia + fgets(STDI);

print "quantos anos v";

$cigarros_fumados = 10*365*3;
$minutos_perdidos = $cigarros_fumados * 11;
$horas_perdidas   = $minutos_perdidos /60;
$dias_perdidos    = round($horas_perdidas/24);
print "Você perdeu  $dias_perdidos dias de vida!";
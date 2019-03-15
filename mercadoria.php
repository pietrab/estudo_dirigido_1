<?php

print "Escreva o valor do produto sem o deconto ";
$semdesconto = (int) fgets (STDIN);

print "Escreva o percentual de desconto ";
$desconto = (int) fgets (STDIN);
$diferenca = (($desconto/100)*$semdesconto);

print "O valor do desconto é de $diferenca \n";

$valorfinal= ($semdesconto - $diferenca);

print "O valor final é de $valorfinal \n";
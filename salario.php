<?php

print "Escreva seu salário antes do aumento ";
$salarioi = (int) fgets (STDIN);

print "Escreva o percentual de aumento ";
$percentual = (int) fgets (STDIN);
$diferenca = (($percentual/100)*$salarioi);

print "A diferença entre o salário inicial e final é de $diferenca \n";

$salariof = ($salarioi + $diferenca);

print "O salário final é $salariof\n";

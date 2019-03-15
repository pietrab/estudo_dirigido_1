<?php

print "Qual a temperatura em graus Celsis? ";
$celsius = (int) fgets (STDIN);

$fahrenheit = (9* $celsius /5 + 32);

print "A temperatura em Fahrenheit é $fahrenheit \n";
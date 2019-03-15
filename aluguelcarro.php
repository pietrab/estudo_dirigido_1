<?php

print "Por quantos dias o carro ficou alugado? ";
$dias = (int) fgets (STDIN);
$valordias = ($dias* 60);

print "Quantos km foram percorridos? ";
$km = (int) fgets (STDIN);
$valorkm = ($km * 0.15);

$valortotal = ($valordias + $valorkm);

print "O valor a pagar é R$$valortotal \n";


<?php

print "Qual a distância a percorrer em km? ";
$distancia = (int) fgets (STDIN);

print "Qual a velocidade média esperada em km/h? ";
$velocidade = (int) fgets (STDIN);

$tempoviagem = ($distancia/ $velocidade);

print "O tempo de viagem será aproximadadente $tempoviagem horas \n";
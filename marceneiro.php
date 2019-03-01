<?php
  
     print "Tamanho da tábua em metros: ";
     $tamanho_da_tabua_em_metros = (float) fgets (STDIN);

     $tamanho_em_centimetros = $tamanho_da_tabua_em_metros*100;
     $quantidade_de_pedacos = round($tamanho_em_centimetros/45);
     $tamanho_da_sobra = $tamanho_da_tabua_em_metros % 45;

     print "Quantidade de pedaços: $quantidade_de_pedacos \n";
     print "Tamanho da sobra: $tamanho_da_sobra centímetros \n";
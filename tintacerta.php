<?php
print "Digite o tamanho em metros quadrados da área a ser pintada:";
$areapintada = fgets(STDIN);
    $area_folga = $areapintada+(($areapintada*10)/100);
    $quantidade_lata = ceil($area_folga/108);  
    $preco_lata = $quantidade_lata*80; 
print "Você precisará de $quantidade_lata lata(s) de 18L. \n";
print "O preço será de " .'R$' ."$preco_lata. \n";
print "\n";
print "ou \n";
    $quantidade_galao = ceil($area_folga/21.6);
    $preco_galao = $quantidade_galao*25;
print "Você precisará de $quantidade_galao galão(ões) de 3,6L. \n";
print "O preço será de R$ $preco_galao. \n";
print "\n";
print "ou \n";
    $quantidade_galao2 = $quantidade_galao;
    $quantidade_lata2 = 0;
    
 while ($quantidade_galao2 >= 5) {
    $quantidade_lata2 = $quantidade_lata2 + 1;
    $quantidade_galao2 = $quantidade_galao2 - 5;
 }
      $total_a_pagar = ($quantidade_galao2*25)+($quantidade_lata2*80);
print "Você precisará de $quantidade_galao2 galão(ões) e $quantidade_lata2 lata(s) de tinta. \n";
print "O total a pagar será de " .'R$' ."$total_a_pagar";

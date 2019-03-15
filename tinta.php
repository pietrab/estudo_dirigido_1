<?php
/*1 litro para cada 6m²;
  1 lata custa 80 reais com 18 litros;
  1 galão custa 25 reais com 3,6 litros;
  1 lata = 5 galões;*/
print "Tamanho em m² a ser pintado: ";
$m2 = (float) fgets(STDIN);
print "\nDeseja usar: 1 - Lata de 18 litros = custam 85 reais\n             2 - Galão de 3,6 litros = custam 25 reais\n             3 - Misturar galões e latas\n    Selecione 1,2 ou 3: ";
$lataougalao= (float) fgets(STDIN);
if ($lataougalao == 1) 
    {$litros= $m2/6;
     $litros= ceil ($litros);
     $latas= $litros/18;
     $latas= ceil ($latas);
     $precolatas= $latas*85;
     print "\nO preço vai ser: $precolatas reais\nVocê vai comprar $latas latas";}
if ($lataougalao == 2)
{   $litros= $m2/6;
    $litros= ceil ($litros);
    $galoes= $litros/3.6;
    $galoes= ceil ($galoes);
    $precogaloes= $galoes*25;
    print "\nO preço vai ser: $precogaloes reais\nVocê vai comprar $galoes galões";}
if ($lataougalao == 3)
{   $litros= $m2/6;
    $desperdicio= $litros*(10/100);
    $litros= $litros+$desperdicio;
    $litros= ceil ($litros);
    $galoes= $litros/3.6;
    $galoes= ceil ($galoes);
    if ($galoes%5==0 or $galoes>=5)
    {$latasda3= $galoes/5;
        $latasda3= ceil($latasda3);
        $galoessemlatas= $latasda3*5; 
        $galoes= $galoes-$galoessemlatas;
        $galoes= ceil($galoes);
    
        if ($galoes<=0)
         {$galoes=0;}         
    } 
    $precolatas= $latasda3*85;
    $precogaloes= $galoes*25;        
    $custo_total= $precogaloes+$precolatas;
    if ($latasda3<=0) /*Só pra ficar melhorzinho(mais bonito)*/
          {$latasda3=0;}
        /*A quantidade de latas/galões foram arredondadas para cima, pois você compra a lata/galão inteiro*/
   print "\nVocê vai comprar: \n$galoes galão(ões), custando $precogaloes reais\n$tinta.phplatasda3 Lata(s) custando $precolatas reais\nCustando no total: $custo_total reais";}

<?php

 $pritrinca = $_GET['pritrinca'];
 $segtrinca = $_GET['segtrinca'];
 $tertrinca = $_GET['tertrinca'];
 $quatrinca = $_GET['quatrinca'];
 $mask      = $_GET['mask'];

echo "<h1>O ip foi: ";
  echo $pritrinca.".";
  echo $segtrinca.".";
  echo $tertrinca.".";
  echo $quatrinca."/";
  echo $mask;
  echo "</h1>";

$sobradamask = 32 - $mask;
$adr = pow (2 , $sobramask);

 echo "<h1>Qtdade de sub-redes</h1>";
$totalrange = 256 / $adr;
echo $totalrange;

echo "<h1>Qtdade de endereços por sub-rede</h1>";
echo $adr;

echo "<h1>Qtdade de endereços host em cada sub-rede</h1>";
$userhost = $adr - 2;
echo $userhost;

echo "<h1>Encontra-se na sub-rede:</h1>";
$sublocal = (int)($quatrinca / $adr);
echo $sublocal;

echo "<h1>Rede da sub-rede onde o endereço dado se encontra</h1>";
$rede = $adr * $sublocal;
echo $rede;

echo "<h1>O primeiro endereço de host da sub-rede em que o endereço IP informado se encontra</h1>";
$primhost = $rede + 1;
echo $primhost;

$broadcast = ($rede + $adr) - 1;

echo "<h1>O último endereço de host da sub-rede em que o endereço IP informado se encontra</h1>";
$ulthost = $broadcast - 1;
echo $ulthost;

echo "<h1>O valor de broadcast da sub-rede em que o endereço informado se encontra</h1>";

echo $broadcast;

echo "<h1>maskara integral</h1>";
$maskaraint = 256 - $adr;
echo "255.255.255.". $maskaraint;



echo "<h1>Público ou Reservado</h1>";
if(($pritrinca == '10')
  or ($pritrinca=='127')
  or ($pritrinca=='172' and $segtrinca>='16' and $segtrinca<='32')
  or ($pritrinca == '192' and $segtrinca == '168')
){
  echo "<h4>Reservado";
}else{
  echo "<h4>Público";
};

echo "<h1>Classe no qual o ip pertence</h1>";

if( $pritrinca>='0' and $pritrinca<='127'
and $segtrinca>='0' and $segtrinca<='255'
and $quatrinca>='0' and $quatrinca<='255'
and $tertrinca>='0' and $tertrinca<='255'
){
   echo "Classe A </h4>";
 }elseif( $pritrinca>='128' and $pritrinca<='191'
      and $segtrinca>='0' and $segtrinca<='255'
      and $quatrinca>='0' and $quatrinca<='255'
      and $tertrinca>='0' and $tertrinca<='255'
 ){
   echo "Classe B </h4>";
 }elseif ( $pritrinca>='192' and $pritrinca<='223'
       and $segtrinca>='0' and $segtrinca<='255'
       and $quatrinca>='0' and $quatrinca<='255'
       and $tertrinca>='0' and $tertrinca<='255'
 ){
   echo "Classe C </h4>";
 }elseif ( $pritrinca>='224' and $pritrinca<='239'
       and $segtrinca>='0' and $segtrinca<='255'
       and $quatrinca>='0' and $quatrinca<='255'
       and $tertrinca>='0' and $tertrinca<='255'
 ){
   echo "Classe D </h4>";
 }elseif ( $pritrinca>='240' and $pritrinca<='255'
       and $segtrinca>='0' and $segtrinca<='255'
       and $quatrinca>='0' and $quatrinca<='255'
       and $tertrinca>='0' and $tertrinca<='255'
 ){
   echo "Classe E";
 }else{
   echo "Número Invalido";
 }



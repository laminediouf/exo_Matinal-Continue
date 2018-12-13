<?php

//
if(isset($_GET['chiffre'])) {
    $chiffre = $_GET['chiffre'];

   echo conversion_romain($chiffre);
}

//fonction de conversion
function conversion_romain($chiffre)
{
    $chiffresRomains = array( 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
    $chiffresDecimaux = array( 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1);
    
    // un nombre > 4999 ne peut être écrit en chiffre romain
    if ($chiffre > 4999) $chiffre = 4999;
    
    // 0 n'existe pas en chiffre romain
    if ($chiffre <= 0) $chiffre = 1;
    
    // 
    $chiffre = (int) $chiffre;

    $chiffreRomain = '';
    $i = 0;

    // tant que le chiffre entré est > à 0
    while($chiffre > 0)
    {
        if($chiffre >= $chiffresDecimaux[$i]) 
        {
            $chiffre = $chiffre - $chiffresDecimaux[$i];
            $chiffreRomain = $chiffreRomain.$chiffresRomains[$i];
        }
        else
        {
            $i++;
        }
    }
    return $chiffreRomain;
}
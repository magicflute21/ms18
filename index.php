<?php

$nr1 = 2;
$nr2 = 8;
$nr3 = 3.14;
$str1 ="a";
$str2 ="b";
$str3 ="2";

//tõeväärtus

$diff = false; 

//massiiv
$colors = array ("punane","sinine","kollane");


echo "<h1>halooooooooooo!!!!!!!!!!</h1>";


//tegevus numbritega
echo $nr1+$nr2."<br>";

/*
mitme 
realine 
kommentaar
*/

#trellidega saab ka kommenteerida


//tegevused stringidega, tõeväärtus ja võrdlused
echo $str1.$str2."<br>";


if ($diff == true) {
    echo "Tingimus on täidetud!";
} else {echo "Tingimus ei ole täidetud!<br>";}


// ka vari tüüp peab olema sama kolme === puhul

if ($str3 === $nr1){
    echo "On indentsed";
} else { echo "Kõik on halvasti<br>";}


// tegevused massiividega

echo $colors[0]."<br>";


//alustame 0-st , kuni i on väiksem kui kolm, me lisame 1 juurde
for ($i = 0; $i<3; $i++){
    echo $colors[$i]."<br>";
}

?>
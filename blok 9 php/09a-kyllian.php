<?php
$string = "Voor de vormgeving is het handig om te weten hoe het eruit komt te zien voordat je daadwerkelijk tekst gaat plaatsen.";



function  WoordenTeller($zin){
    $hoeveel = 0;
    $Array = explode(" ",$zin);
    
    foreach ($Array as $letters){
           if(strlen($letters) < 4){
            $hoeveel++;
           }

    }

   return $hoeveel;
}



echo WoordenTeller("abcd");

echo "<br>";

echo WoordenTeller("dit is een voorbeeld");

echo "<br>";

echo WoordenTeller("a b c d");

echo "<br>";

echo WoordenTeller($string);




?>
<?php

$PHPCijfers=[4,5,4,5,6,6,5  

print_r( onvoldoende([6,6,7]) );

echo "<br>";

print_r( onvoldoende([6,3,6,7]) );

echo "<br>";

print_r( onvoldoende($PHPCijfers) );






function onvoldoende($array) {
    $returnArray=[];

    for($i=0; $i<count($array); $i++){
        if ( $array[$i]<5.5 ) {
            $returnArray[]=$array[$i];
        }
    }

    return($returnArray);

    



}















?>
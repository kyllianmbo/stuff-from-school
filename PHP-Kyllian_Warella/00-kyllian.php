<?php

$array=[10,20,30,40,50,60,71];

for($i=0; $i<count ($array); $i++){
  echo $array[$i]." ";
}

echo "<hr>";

foreach($array as $elem){
    echo $elem." ";
}

?>
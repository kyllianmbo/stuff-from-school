<?php
$string = "Deze student is erg goed in programmeren in PHP";



function  BreekAf($nummer, $zin){
    $output = substr($zin, 0, $nummer);

    $Array = explode(" ",$zin); 
    $explode = explode(" ",$output);
    $uitkomst = [];

    


    for ($i = 0; $i < count($explode); $i++){
           if ($explode[$i] == $Array[$i]){
            array_push($uitkomst, $explode[$i] . " ");
           }
    
    
}

$return = implode($uitkomst);
return $return;
     
}



echo BreekAf(15,$string);

  echo "<br>";

echo breekAf(32, $string); 	

  echo "<br>";

echo breekAf(18, $string); 	

  echo "<br>";

echo breekAf(19, $string);

  echo "<br>"; 	

echo breekAf(20, $string); 	

  echo "<br>";

echo breekAf(21, $string); 	

  echo "<br>";

echo breekAf(24, $string); 	

   echo "<br>";

echo breekAf(3, $string);
?>

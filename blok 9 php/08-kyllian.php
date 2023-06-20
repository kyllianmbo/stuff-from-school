<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   function telGroteGetallen($array) {
    $som = 0;
    foreach ($array as $getal) {
        if ($getal > 10) {
            $som += $getal;
        }
    }
    return $som;
}


echo telGroteGetallen([10, 20, 20]);  
echo "<br>";
echo telGroteGetallen([9, 10, 11]);  
echo "<br>"; 
$array = [11, 11, 5, 2, 12, 6, 7, 8, 1, 10, 9];
echo "<br>"; 
echo telGroteGetallen($array);       


    ?>



    
</body>
</html>
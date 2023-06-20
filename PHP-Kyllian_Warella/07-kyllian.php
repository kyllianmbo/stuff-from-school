
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteren</title>
</head>
<body>
<form method="get">
Getallen? <input type="text" name="getallen"><br>
<input type="submit">

</form>

<?php

if(isset($_GET['getallen'])){

    $arrayGetallen = explode(",", $_GET['getallen']);
    sort($arrayGetallen);
    $arrayGetal = count($arrayGetallen);


    for ($x = 0; $x < $arrayGetal; $x++){
        echo $arrayGetallen[$x];
        echo '<br>';
    }

}

?> 
</body>
</html>


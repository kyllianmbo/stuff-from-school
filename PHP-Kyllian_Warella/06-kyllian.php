  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemiddelde van alle getallen</title>
</head>
<body>
<form method="get">
Getallen? <input type="text" name="getallen"><br>
<input type="submit">

</form>

<?php 
if (isset($_GET['getallen'])){
$arrayGetallen = explode(",", $_GET['getallen']);
echo 'Aantal ingevoerde getallen: ' . count($arrayGetallen);
echo '<br>';

echo 'Totaal van alle getallen: ' . array_sum($arrayGetallen);
$avg = array_sum($arrayGetallen) / count($arrayGetallen);
echo '<br>';
echo 'Gemiddelde van alle getallen: ' . $avg; 

}
?>  
</body>
</html>

  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ba</title>
    <meta http-equiv="refresh" content="10">
</head>
<body>
<?php

function begroeting($naam){

    date_default_timezone_set("Europe/Amsterdam");
    $datum = date("h");
    if($datum > 18){
        echo "Goedenavond " . $naam;
    } else if($datum < 12){
        echo "Goedemiddag " . $naam;
    } else{
        echo "Goedemorgen " . $naam;
    }
    echo "<br>";
}
echo begroeting("kyllian");
echo begroeting("kyllian");
echo begroeting("kyllian");
?> 
</















?>
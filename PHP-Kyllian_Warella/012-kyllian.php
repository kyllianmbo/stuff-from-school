<?php


$places = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London");


foreach ($places as $key => $value){
    echo "Het land  " . $key . " heeft een hoofdstad genaamd : " . $value;
    echo "<br>";
}


?>


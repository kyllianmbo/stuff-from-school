<table border=1>
<?php

$a = [
    "januari" => 3.1,
    "februari" => 3.3,
    "maart" => 6.2,
    "april" => 9.2,
    "mei" => 13.1,
    "juni" => 15.6,
    "juli" => 17.9,
    "augustus" => 17.5,
    "september" => 14.5,
    "oktober" => 10.7,
    "november" => 6.7,
    "december" => 3.7];
    
echo"<tr>";

echo"<td>Maand</td>";
echo"<td>Gem. temperatuur</td>";

echo"</tr>";

foreach ($a as $key => $value){
    echo"<tr>";

    echo"<td>" . $key . "</td>";
    echo"<td>" . $value . "</td>";

    echo"</tr>";

}


?>
</table>
<table border=1>
<?php


$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];


 foreach ($a as $b){
     echo '<tr>';
     for ($x = 0; $x < 10; $x++){
         echo '<td>' . $a[$x] . '</td>';
     }
     echo '</tr>';
 }


?>
</table>
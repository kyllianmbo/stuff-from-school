<form action="" method="get">    

<?php
$ceu = array(
  "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
  "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
  "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
  "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
  "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
  "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna",
  "Poland"=>"Warsaw") ;
  asort($ceu);
$rand = array_rand($ceu, 1);

echo "What is the Capital Of " . $rand;
?>




<br><br>
 <input value="<?= $rand?>"type="hidden" name="land">

 <select name="a">

  <?php 
      foreach($ceu as $key => $value){
      echo "<option><li>" . $value . "</li></option>";
    }
  ?>

 </select>
  <input type="submit" value="Check My Answer">

 <br><br>


<?php



if (isset($_GET["a"])){
  $b = $_GET["land"];
    if  ($_GET["a"] == $ceu[$b]){
     echo "The Capital of " . $b . " is " . $ceu[$b] . ", your answer is correct."; 
    } else {
     echo "The Capital of " . $b . " is " . $ceu[$b] . ", your answer " . $_GET["a"] . " is incorrect."; 
    } 
} 
?>



</form>

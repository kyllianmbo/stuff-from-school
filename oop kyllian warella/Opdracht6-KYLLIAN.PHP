<?php
class scooter{
    public $kleur;
    public $merk;
    public $tank;  

    public function inhoudtank(){
        if($this->tank == 10){
            echo 'de tank is vol';
            }
        else{
            echo 'de tank is niet vol';
        }
    }
}

$piago = new scooter();
$piago->kleur = 'rood';
$piago->tank = '6';

$peugeot = new scooter();
$peugeot->kleur = 'zwart';
$peugeot->tank = '7';

echo $piago->inhoudTank()."<br>";
echo $peugeot->inhoudTank()."<br>";
?>

//echo $game1->



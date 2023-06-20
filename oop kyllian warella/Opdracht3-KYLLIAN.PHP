<?php
class Product{
    public $merk;
    public $prijs;
    public $type;
    public $kleur;

}

$Dweil = new Product();
$Stofzuiger = new Product();

$Dweil->merk = 'Hema';
$Dweil->prijs = '10';
$Dweil->type = 'Lang';
$Dweil->kleur = 'rood';

$Stofzuiger->merk = 'Aegon';
$Stofzuiger->prijs = '50';
$Stofzuiger->type = 'gfs505';
$Stofzuiger->kleur = 'grijs';



echo $Dweil->merk;
echo '<br>';
echo $Dweil->prijs;
echo '<br>';
echo $Dweil->type;
echo '<br>';
echo $Dweil->kleur;


echo '<br>';

echo $Stofzuiger->merk;
echo '<br>';
echo $Stofzuiger->prijs;
echo '<br>';
echo $Stofzuiger->type;
echo '<br>';
echo $Stofzuiger->kleur;

?>






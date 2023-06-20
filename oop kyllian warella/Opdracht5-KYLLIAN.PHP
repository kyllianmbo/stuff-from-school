<?php

class mens{

    public $geslacht;
    public $afkomst;
    public $gewicht;    
    public $lengte;
}

class baby extends mens{
   public $praten;
   public $lopen; 
}

class volwassenen extends mens{
    public $werk;
    public $kracht;
}

$b = new baby();

$b->praten = "een baby kan nog niet praten";
echo $b->praten . "<br>";

$b->lopen = "een baby kan ook nog niet lopen";
echo $b->lopen  . "<br>";



$v = new volwassenen();

$v->werk = "een volwassen persoon kan werken";
echo $v->werk   . "<br>";

$v->kracht = "een volwassen persoon heeft veel kracht";
echo $v->kracht . "<br>";

?>


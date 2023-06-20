<?php
class lamp{
    public $kleur;
    public $helderheid;
    public $isAan;

     function setStatus($status){
        $this->isAan = $status;
        
    }  
}

$woonkamerlamp = new lamp;
$woonkamerlamp->kleur = 'geel';
$woonkamerlamp->helderheid = 'zacht';
$woonkamerlamp->isAan = 'true';
$woonkamerlamp->setStatus   (' woonkamer lamp is aan');
echo $woonkamerlamp->isAan;

echo '<br>';

$keukenlamp = new lamp();
$keukenlamp->kleur = 'wit';
$keukenlamp->helderheid = 'vel';
$keukenlamp->isAan = 'false';
$keukenlamp->setStatus('Keukenlamp is uit');
echo $keukenlamp->isAan;





?>


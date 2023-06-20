<?php
class Computer{
    public $merk;
    public $hdd_capacity;
    public $memory;
    
}

$nieuweComputer = new Computer();

$nieuweComputer->merk = 'LENOVO';
$nieuweComputer->hdd_capacity = '512 GB SSD';
$nieuweComputer->memory = '16gb';

echo $nieuweComputer->merk;
echo '<br>';
echo $nieuweComputer->hdd_capacity;
echo '<br>';
echo $nieuweComputer->memory;

?>


















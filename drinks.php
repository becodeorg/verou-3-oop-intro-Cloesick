<?php
ini_set('display_errors', value: '1');
ini_set ( option: 'display_startup_errors', value: '1');
error_reporting(error_level: E_ALL)

require './beverage.php';
class Beer extends beverage{
    public string $name;
    public float $alcoholpercentage;

    public function __construct($color, $temp, $price, string $name, float$alcoholpercentage)
    {
        $this->name=ucfirst($name);
        $this->alcoholpercentage=($alcoholpercentage;)
    }
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholpercentage;
    }
}

$duvel = new Beer ("Blond", "cold", 8.5, "Duvel", 8.5);
echo $duvel->getAlcoholPercentage() . "%";
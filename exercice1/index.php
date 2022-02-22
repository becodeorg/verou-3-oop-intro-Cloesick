<?php
ini_set('display_errors', value: '1');
ini_set ( option: 'display_startup_errors', value: '1');
error_reporting(error_level: E_ALL)

declare(strict_types=1);

EXERCISE 1
// TODO: Create a class beverage.
// TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.

class beverage{
    var $color;
    var $price;
    var $temperature;
    var $alcoholDegree;

}

function__construct(){
    $this -> color = $this->giveColor('blue');
    $this -> price = $this->price('blue');
    $this -> temperature = $this->temperature('blue');
    $this -> alcoholDegree = $this->alcoholDegree('5%');
}

// Create a new beverage instance.
$beverage = new beverage;

echo $beverage -> alcoholDegree;

// Set properties.
$beverage->color                = 'Game of Thrones';
$beverage->price               = 'George R R Martin';
$beverage->temperature            = 'Voyager Books';

// TODO: Have a default value "cold" in the construct for temperature.
echo $beverage -> format;

// Remember for now we will use properties and methods that can be accessed from everywhere.
// TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
echo "This beverage is + $temperature and + $color"
// TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//  print the getInfo on the screen.
// TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/
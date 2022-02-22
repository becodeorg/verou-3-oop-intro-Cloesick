<?php
ini_set('display_errors', value: '1');
ini_set ( option: 'display_startup_errors', value: '1');
error_reporting(error_level: E_ALL);

declare(strict_types=1);

//EXERCISE 1
// Create a class beverage.
// Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
// Also foresee a construct.
class beverage
{
        public string $name;
        public string $color;
        public string $price;
        public string $temperature="cold";
        public string $alcoholDegree;

    //creat construct function - make it public
    public function__construct($color, $temperature, $name, $price)
    {
        $this -> name = $name
        $this -> color = $Color;
        $this -> price = $price;
        $this -> temperature = $temperature;
        $this -> alcoholDegree = $this->alcoholDegree('5%');
    }
}
    function getInfo($drink)
{
    echo "This beverage is " . $drink->temp . " and " . $drink->color;
}
// Create a new beverage instance.
// Have a default value "cold" in the construct for temperature.

$cola = new beverage("black", "cold", 2, "cola");
// Make a getInfo function which returns "This beverage is <temperature> and <color>."
getInfo($cola);
// Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically.
echo nl2br("\n");
// TODO: Print the temperature on the screen.
echo $cola->temperature


USE TYPEHINTING EVERYWHERE!
*/
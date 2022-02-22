<?php
declare(strict_types=1);
//Type declarations
ini_set('display_errors', value: '1');
ini_set ( option: 'display_startup_errors', value: '1');
error_reporting(error_level: E_ALL);

require './person.php';
require './student.php';
require './teacher.php';

$basile = new Person( name: 'basile', sweethearts: 10);
$jordy = new Person( name: 'jordy', sweethearts:0.5);

public function __construct(string $name, int $sweethearts){
    $this->name = ucfist($name);
    $this->sweethearts = $sweethearts;
}
public function talk()
{
    return 'Tell a joke, please please'
}


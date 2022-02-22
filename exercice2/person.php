<?php

ini_set('display_errors', value: '1');
ini_set ( option: 'display_startup_errors', value: '1');
error_reporting(error_level: E_ALL)

require './person.php';

$basile = new Person( name: 'basile', sweetherats: 10);
$jordy = new Person( name: 'jordy', sweetherats:0.5);
$Dante = new Person( name: 'Dante');
$Micahel = new Person( name: 'Michael');

'4'+ '5' = 45 //not 9 cause its string
echo $basile->name;

// use var_dump($Mihael-> name:123)



<?php
$waarde = intval($argv[1]);

$floored10 = floor($waarde / 10);
echo "$floored10 x €10,00" . PHP_EOL;
$modulo10 = $waarde % 10;

$floored5 = floor($modulo10 / 5);
echo "$floored5 x €5,00". PHP_EOL;
$modulo5 = $floored10 % 5;

$floored2 = floor($floored5 / 2);
echo "$floored2 x €2,00" . PHP_EOL;
$modulo1 = $floored5 % 2;
echo "$modulo1 x €1,00" . PHP_EOL;

#var_dump($argv, $waarde, $floored2,$modulo1, $modulo5, $modulo10);

#echo $modulo10 . " X €10,00". PHP_EOL . $modulo5 . " X €5,00" . PHP_EOL . $floored2 . " X €2,00" . PHP_EOL . $modulo1 . " X €1,00";
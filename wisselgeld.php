<?php
$waarde = intval($argv[1]);
$floored = floor($waarde / 2);
$modulo = $waarde % 2;

#var_dump($argv, $waarde, $floored,$modulo);

echo $floored . " X €2,00 & " . $modulo . " X €1,00";
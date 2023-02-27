<?php

echo date(  'r');

$a = 1;
$b = 3;
$c = 3;

var_dump($a > $b);
var_dump($b >= $c);

$a = 5;
var_dump(isset($a) != true);

$a = NULL;
var_dump(is_null($a) != false);

$a = true;
$b = false;
$d = $a || $b ? 0 : 1;
var_dump($d);

$a = 3;
$b = 10 * rand(1,3);
var_dump($a, $b);

if (($a * $b) < 100) {
    echo 'меньше 100';
} elseif (($a * $b) < 200) {
    echo 'меньше 200';
} else echo 'все остальное';

$a = rand(1,9);
$b = 10 * rand(1,3);
var_dump($a, $b);
$d = $a * $b;
switch ($d) {
    case ($d >= 0) && ($d < 100):
        echo 'больше или равно 0, но меньше 100';
        break;
    case ($d >= 100) && ($d < 200):
        echo 'больше или равно 100, но меньше 200';
        break;
    case ($d >= 200) && ($d < 300):
        echo 'больше или равно 200, но меньше 300';
        break;
}

$a = rand(1,9);
$b = 10 * rand(1,3);
var_dump($a, $b);
$d = $a * $b;
$d += rand(0,100);
switch ($d) {
    case ($d >= 0) && ($d < 100):
        echo 'больше или равно 0, но меньше 100';
        break;
    case ($d >= 100) && ($d < 200):
        echo 'больше или равно 100, но меньше 200';
        break;
    case ($d >= 200) && ($d < 300):
        echo 'больше или равно 200, но меньше 300';
        break;
    default:
        echo 'другое';
}

$a = rand(0,1);
var_dump($a);

$d = ($a == 0) ? NULL : rand(1,3);
var_dump($d);

switch ($d) {
    case NULL:
        echo 'd = NULL';
        break;
    case 1:
        echo 'd = 1';
        break;
    default: echo 'другое';
}
var_dump(isset($d));

$c = $d ?? rand(20,30);






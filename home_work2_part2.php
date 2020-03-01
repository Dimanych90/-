<?php

// Задание 4
echo date('d.m.Y H:i:s');
echo '<br>';
$date = '24.02.2016 00:00:00';
echo strtotime($date);

echo '<br>';
echo '<hr>';

/*$a = 1;

$result = isset($a);
var_dump($result);


$str = 'peter piper';

//echo strtolower(strtoupper($str));
echo ucfirst($str);
echo PHP_EOL;
*/

// адание 5
//часть1
$a = 'Карл у Клары украл Кораллы';

echo str_replace('К', '',$a);
echo PHP_EOL;
//часть2
echo '<br>';
$str = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $str);

echo PHP_EOL;

echo '<br>';
echo '<hr>';
// Задание 6

$test = 'HEllo again';
file_put_contents('test.txt', $test);
fopen('test.txt','r+');
echo $test;

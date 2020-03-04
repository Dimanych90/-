<?php

/*function helloworld(string $name, string $Lastname = 'Medelyaev', $print = true)
{
    $str =  ' '. 'Hello'. ' '. $name. ' ' . $Lastname . '<br>';
    if ($print){
        echo $str;
    } else {
        return $str;
    }
}
$string = helloworld('Dimasic', 'Petrov', false);
echo 'Наша строка = ' . ' '. $string;

*/

require 'functions.php';


print_r(task1([]));


task2('+', 1, 4, 5, 4, 8);


echo '<br>';
echo '<hr>';

echo task3(8, 8);


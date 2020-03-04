<?php

function task1(array $names, $print = true)
{
    foreach ($names as $value) {
        echo '<p>' . $value . '<p>' . '<br>';
    }
    if ($print == true) {
        echo implode($names);
    }
}

$names = ['man' => 'Vasya',
    'woman' => 'Dasha',
    'it' => 'cat'];

print_r(task1($names));


function task2($operator, ...$numbers)
{
    $str = 0;
    $expression = implode($operator, $numbers);
    foreach ($numbers as $number) {
        switch ($operator) {
            case '+':
                $str += $number;
                break;
            case '-':
                $str -= $number;
                break;
            case '*':
                $str *= $number;
                if ($str == 0) {
                    $str = $number;
                } else {
                    $str *= $number;
                }
                break;
            case '/':
                if ($str == 0) {
                    $str = $number;
                } elseif ($str /= 0) {
                    echo 'Это ошибка, на ноль делить нельзя';
                } else {
                    $str /= $number;
                }
                break;
        }
    }
    echo $expression . ' = ' . $str;
}


function task3($num1, $num2)
{
    echo '<table border="1">';


    for ($tr = 0; $tr <= $num1; $tr++) {

        echo '<tr><td>' . $tr . '</td>';
        for ($td = 1; $td <= $num2; $td++) {
            if ($tr > 1) {
                $result = $td * $tr;
                if (is_int($num1)) {
                    echo '<td>' . $result . '</td>';
                } elseif (is_int($num2)) {
                    echo '<td>' . $result . '</td>';
                } else
                    echo 'Так нельзя';
            } else {
                echo '<td>' . $td . '</td>';
            }
        }
        echo '</tr>';
    }

    echo '</table>';
}


echo '<br>';
echo '<hr>';

function task4()
{

}

function task5()
{

}

function task6()
{

}

function task7()
{

}

function task8()
{

}

function task9()
{

}

function task10()
{

}
<?php

function task1(array $names, $print = true)
{
    foreach ($names as $value) {
        echo '<p>' . $value . '<p>' . '<br>';
    }if ($print == true){
    echo implode($names);
}
}
    $names = ['man' => 'Vasya',
        'woman' => 'Dasha',
        'it' => 'cat'];

print_r(task1($names));

echo '<br>';
echo '<hr>';

function task2()
{
$somevalue = '';
$str = 0;
foreach (func_get_args() as $arg){
    if (!is_int($arg)){
        $somevalue = $arg;
    }else{
        switch ($somevalue){
            case '+':
                $str += $arg;
                break;
            case '-':
            $str -= $arg;
                break;
            case '*':
            $str *= $arg;
              if ($str == 0){
                  $str = $arg;
              } else{
                  $str *= $arg;
              }  break;
            case '/':
                if ($str == 0){
                    $str = $arg;
                } elseif ($str /=0){
                    echo 'Это ошибка, на ноль делить нельзя';
                }
                else{
                    $str /= $arg;
                }   break;
        }
        }


    }

    echo $str;
}
    task2('+',1,4,5,4,8,9,5,1);
echo '<br>';
echo '<hr>';


function task3($num1, $num2)
{ echo '<table border="1">';


    for ($tr = 0; $tr <= $num1; $tr++) {

        echo '<tr><td>'. $tr .'</td>';
        for ($td = 1; $td <= $num2; $td++) {
            if ($tr > 1) {
                $result = $td * $tr;
                if (is_int($num1)) {
                    echo '<td>' . $result . '</td>';
                } elseif (is_int($num2)) {
                    echo '<td>' . $result . '</td>';
                } else
                    echo 'Так нельзя';
            }else{
                echo '<td>' . $td . '</td>';
            }
        }
        echo '</tr>';
    }

    echo '</table>';
}



echo '<br>';
echo '<hr>';

function task4(){

}

function task5(){

}

function task6(){

}

function task7(){

}

function task8(){

}

function task9(){

}

function task10(){

}
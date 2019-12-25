<?php

/**
 *
 * Определить переменную $students и инициализировать ее индексированным массивом из 5 элементов
 * С помощью цикла foreach перебрать элементы и вывести значения на экран
 * Пропустить элемент с индексом 2 с помощью инструкции continue
 * После вывода элемента с индексом 3 выйти из цикла с помощью инструкции break
 */
$index[]=0;
$students = array
(1=>
        'Den<br>',
    'Den<br>',
    'Max<br>',
    'Max<br>',
    'Vladimir<br>');
foreach ($students as $key =>$value){
    if(!($key %2)){
        continue;
    }
    if($key >3){
        break;
    }

    echo $key . ".". $value;
}

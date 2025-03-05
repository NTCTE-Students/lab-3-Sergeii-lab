<?php

$number_array = [5, 2, 7, 1, 3];

sort($number_array);
echo "Сортировка по возрастанию: ";
print_r($number_array);

rsort($number_array);
echo "Сортировка по убыванию: ";
print_r($number_array);

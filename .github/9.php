<?php

$array = ["apple", "banana", "cherry", "date"];

$search_element = "banana";

if (($key = array_search($search_element, $array)) !== false) {
    echo "Элемент \"$search_element\" найден на позиции " . ($key + 1) . "\n"; 
} else {
    echo "Элемент не найден.\n";
}

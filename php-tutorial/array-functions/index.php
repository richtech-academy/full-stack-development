<?php
$firstArrayKeys = array('a', 'b', 'c');
$firstArray = array('apple', 'orenge', 'banana');
$secondArray = array('grapes', 'pineapple');

// print_r(array_merge($firstArray, $secondArray));

$associativeArrray = array_combine($firstArrayKeys, $firstArray);

// print_r(array_values($associativeArrray));
// print_r(array_keys($associativeArrray));

// print_r(array_slice($firstArray, 1, 2));

array_push($firstArray, 'Dragon Froute');

print_r($firstArray);

array_pop($firstArray);

print_r($firstArray);

?>
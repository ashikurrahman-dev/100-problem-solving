<?php 

// Write a PHP function that takes an array of integers and returns the sum of all elements in the array.

$arrays = [10, 15, 25, 7, 9, 2, 100, 23, 43, 83];

// built in function
$sum = array_sum($arrays);
// echo $sum; // 317

// foreach loop
$sum = 0;
foreach ($arrays as $array){
    $sum += $array;
}
// echo $sum; // 317


// array reduce
$sum = array_reduce($arrays, function($carry, $num){
    return $carry + $num;
}, 0);
// echo $sum;

// use arrow function
$sum = array_reduce($arrays, fn ($carry, $num) => $carry + $num, 0);
echo $sum;

// recursion
function sumArray($numbers){
    if(empty($numbers)){
        return 0;
    }

    $first = array_shift($numbers);

    return $first + sumArray($numbers);
}

echo sumArray($arrays);

<?php 

$arr = [6, 7, 1, 7, 9];

//  built in function
// echo min($arr);
// echo max($arr);

// loop
function minLoop($arrays){
    $min = $arrays[0];
    foreach($arrays as $arr){
        if($min > $arr){
            $min = $arr;
        }
    }
    return $min;
}
function maxLoop($arrays){
    $max = $arrays[0];
    foreach($arrays as $arr){
        if($max < $arr){
            $max = $arr;
        }
    }
    return $max;
}
// echo minLoop($arr);
// echo maxLoop($arr);

// sort
// sort($arr);
// echo $arr[0]; 
// echo $arr[count($arr) - 1];

// array_reduce
$min = array_reduce($arr, fn ($carry, $item) => $item < $carry ? $item : $carry, PHP_INT_MAX);
// echo $min;

$max = array_reduce($arr, fn($carry, $item) => $item > $carry ? $item : $carry, PHP_INT_MIN);
// echo $max;


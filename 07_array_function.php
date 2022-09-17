<?php

$fruits = ['apple', 'orange', 'banana'];

echo count($fruits);

// search array
var_dump(in_array('apple', $fruits));

//add to array
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
//add to array to the beginning
array_unshift($fruits, 'mango');

//remove from array 
//remove from end 
array_pop($fruits);
//remove from start
array_shift($fruits);
//remove specific
// unset($fruits[2]);

//split in 2 chunks
$chunked_array = array_chunk($fruits, 2);
// print_r($chunked_array);


// print_r($fruits);

$arr1 = [1,2,3];
$arr2 = [4,5,6];

//both does the same
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20);

//print_r($numbers);

$newNumber = array_map(function($number) {
    return "Number $number";
}, $numbers);

// print_r($newNumber);

$lessthan10 = array_filter($numbers, fn($number) => $number <= 10);
// print_r($lessthan10)

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number)
;
var_dump($sum);

?>
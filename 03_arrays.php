<?php 

//simple array
$numbers = [1, 66, 99];

$fruits = array('apple', 'banana');

 print_r($numbers);

var_dump($numbers);
<br />
echo $fruits[1];

//associative array
$colors = [
    1 => 'red',
    2 => 'green',
    4 => 'blue'
];

echo $colors[2];

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'

];

// echo $hex['blue'];

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Smith',
    'email' => 'brad@gmail.com'
];


// echo $person['first_name'];

$people = [
    [
    'first_name' => 'Brad',
    'last_name' => 'Smith',
    'email' => 'brad@gmail.com'
    ],
      [
    'first_name' => 'John',
    'last_name' => 'Travis',
    'email' => 'john@gmail.com'
      ],
        [
    'first_name' => 'Emma',
    'last_name' => 'Dren',
    'email' => 'emma@gmail.com'
    ]
];

echo $people[1]['email'];

var_dump(json_encode($people));
?>
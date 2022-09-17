<?php
/* for loop syntax
 for (initialize; condition; increment) {
//code to be executed
}*/

for($x = 0; $x <= 10; $x++) {
echo 'Number ' . $x . '<br>';
}


//  while loop syntax
//  while(condition) {
//     code to be executed
// }

$y = 1;
while($y <= 15) {
   echo 'Number ' . $y . '<br>';
   $y++;
}

// do...while loop will always execute the block of code once, even if the condition is false

$k = 1;

do {
    echo 'number ' . $k . '<br>';
    $k++;
} whlie($k <= 5);

// ** foreach loop syntax 
// foreach ($array as $value) {
//     code to be executed
// }

$posts = ['First Post', 'Second Post'];

for ($p = 0; $p < count($posts); $p++) {
    echo $posts[$p];
}

// foreach($posts as $post) {
//     echo $post;
// }
foreach($posts as $index => $post) {
    echo $index + 1 . '-' . $post . '<br>';
 }

 $person = [
    'first_name' => 'Brad',
    'last_name' => 'Smith',
    'email' => 'brad@gmail.com'
];

foreach($person as $key => $value) {
    echo "$key - $value <br>";
}
?>
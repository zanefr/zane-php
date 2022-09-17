<?php

$age = 20;

if($age >= 18) {
    echo 'You are old enough to vote';  
} else {
    echo 'Sorry! You are not old enough to vote';
}

$t = date("H");

if($t < 12){
    echo "Good morning";
}elseif($t < 17) {
    echo 'Good afternoon';
}
else {
    echo 'Good evening!';
}

$posts = ['First post'];


// if(!empty($post)) {
//     echo $post[0];
// }else {
//     echo 'No post';
// }

// echo !empty($posts) ? $posts[0] : 'No posts';

// $firtPost =  !empty($posts) ? $posts[0] : 'No posts';
// $firtPost =  !empty($posts) ? $posts[0] : null;
$firtPost = $posts[0] ?? null;
echo $firtPost;


$favColor = 'red';
switch($favColor) {
    case 'red': 
        echo 'Your favorite color is red';
        break;
        case 'blue':
            echo 'Your favorite color is blue';
        break;
         case 'green':
            echo 'Your favorite color is green';
        break;
        default:
        echo 'Your favorite color is not red, green or blue';
}
?>
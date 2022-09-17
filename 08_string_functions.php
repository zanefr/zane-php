<?php

$string = "Hello world!";

//get the length of a string
echo strlen($string);

//find the position of the first occurrence of a substring in a string
echo strops($string, 'o');

//find the position the last occurrence of a substring in a string
echo strrpos($string, 'o');

//reverse a string
echo strrev($string);

//convert all characters to lowercase
echo strtolower($string);

//convert all characters to uppercase
echo strtoupper($string);

//uppercase the first character of each word
echo ucwords($string);

//string replace
echo str_replace('World', 'Everyone', $string);

//return portion of a astring specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

//starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

//ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}
//will alert as javaScript
$string2 = '<script>alert</script>';
echo $string2;

//will show everything that's in '' on the page
$string2 = '<script>alert</script>';
echo htmlspecialchars($string2);

//first %s prints as 'Brad' and the second one with 'code'
printf('%s likes to %s', 'Brad', 'code');

printf('1+1=%d', 1+1);


?>
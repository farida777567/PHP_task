<?php
// PHP Program to Check if an Element Exists in Array or Not
$array = ['hi', 'hello'];
$element = 'hi';

if (in_array($element, $array)) {
    echo "$element exists in the array.";
} else {
    echo "$element does not exist in the array.";
}
?>

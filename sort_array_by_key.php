<?php
// Sort array by key
$array = [
    '1' => 'a',
    '4' => 'b',
    '7' => 'c',
    '9' => 'd'
];

ksort($array);
print_r($array);
?>

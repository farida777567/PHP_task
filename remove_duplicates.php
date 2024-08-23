<?php
// Remove duplicate values from an array
$array = ['Hi', 'Hi', 'Hello', 'Helo', 'Hello'];
$unique_array = array_unique($array);
print_r($unique_array);
?>

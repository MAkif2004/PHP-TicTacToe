<?php
$height = 5;
$width = 5;
$value = 0;

// create 2D array with all elements set to $value
$array = array();
for ($i = 0; $i < $height; $i++) {
    $array[$i] = array();
    for ($j = 0; $j < $width; $j++) {
        $array[$i][$j] = $value;
    }
}
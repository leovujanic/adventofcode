<?php
/**
 * User: leonardvujanic
 * DateTime: 05/12/2017 20:58
 *
 *
 */

function dump($arg)
{
    var_dump($arg);
}

$input = file_get_contents(__DIR__ . '/../inputs/fifth-day-input.txt');

$items = explode("\n", $input);

$items = [0, 3, 0, 1, -3];

$itemsCount = count($items);

$index = 0;

$steps = 0;


while ($index >= 0 && $index < $itemsCount) {
    
    $step = (int)$items[$index];
    
    
//    if ($step >= 3) {
//        --$items[$index];
//    } else {
//        ++$items[$index];
//    }
    
//    $add = $step >= 3 ? -1 : 1;
    
    
    $items[$index] += $step >= 3 ? -1 : 1;
    
    
    $index += $step;
    
    
    ++$steps;
}

dump($steps);
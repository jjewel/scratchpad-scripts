<?php

$arr1 = [1 => 'a', 'a' => '1'];
$arr2 = ['a' => '1', 1 => 'a'];

echo "<pre>";

print_r($arr1);
echo PHP_EOL;

print_r($arr2);
echo PHP_EOL;

echo 'A, B == ' . arrayCompare($arr1, $arr2) . PHP_EOL;
echo 'B, A == ' . arrayCompare($arr2, $arr1) . PHP_EOL;

echo 'A, B === ' . arrayCompareStrict($arr1, $arr2) . PHP_EOL;
echo 'B, A === ' . arrayCompareStrict($arr2, $arr1) . PHP_EOL;

function arrayCompare(Array $arrA, Array $arrB) {
    return $arrA == $arrB ? 'true' : 'false';
}

function arrayCompareStrict(Array $arrA, Array $arrB) {
    if($arrA === $arrB) {
        return 'true';
    } 
    return 'false';
}
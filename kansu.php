<?php
//課題1//
function sum($a) {
    $result = $a *2;
    return $result;
}
echo sum(2);
echo "\n";

//課題2
function f($a, $b){
    $result = $a + $b;
    return $result;
}
echo f(1,2);
echo "\n";

//課題3
function a($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    echo $result;
}
a(array(1,3,5,7,9));
echo "\n";

//課題4「応用」
$arr = [1,2,3,4,5];

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a);
           $max_number = $a;
    }
    return $max_number;
}
echo max_array($arr);
echo "\n";

//課題5

//strip_tags
$str = "<h1>tech_boost<h1>";
echo strip_tags($str);
echo "\n";

//array_push
$stack = array("apple","banana");
array_push($stack, "orange", "lemon");
print_r($stack);
echo "\n";

//array_merge
$array1 = [1,2,3];
$array2 = [4,5,6];
$array = array_merge($array1, $array2);
print_r($array);

//time, mkitime
$Now = time() ;
echo 'Now:'. date('y-m-d') ."\n";

$timestamp = mktime(0,0,0,12,1,2020);
echo $timestamp . "\n";

//date
$date = date('w');
echo $date . "\n";


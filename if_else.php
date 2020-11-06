<?php
//課題1//
$name="toru";
if ($name = "toru"){
    echo "私はトオルです \n";
} else {
    echo "トオルではありません \n";
}

//課題2//
$total = 0;
for($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total ;
echo "\n";

//課題3//
$fruits = array("apple","orange","lemon","peach","melon");
foreach($fruits as $fruits){
    echo "$fruits";
    echo "\n";
}

//応用//
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
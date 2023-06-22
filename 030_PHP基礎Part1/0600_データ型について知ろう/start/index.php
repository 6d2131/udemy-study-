<?php 
// データ型とは
$i = 1;
// var_dump($i);
$b = true;
// var_dump($b);
$str  = 'hello';
// var_dump($str);

// データ型の確認方法　var_dump

// 異なる型は自動的に変換される
echo $i + $b;
// 型の取り扱いの注意
var_dump($i === 1);
var_dump($i === '1');
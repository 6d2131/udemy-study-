<?php 
// ==と===の違い
if(1 === '1') {
    echo 'true';
} else {
    echo 'false';
}

// ==は型の比較をしない
if(1 == '1') {
    echo 'true';
} else {
    echo 'false';
}

// falseな値
// 0(数値、文字列)
// NULL
// FALSE
<?php
//グローバルスコープ
$a = 0;

//ローカルスコープ
function fn1() {
    $b = 1;
}

function fn2() {
    global $a;
    var_dump($_SERVER); //スーパーグローバル
    // $b = 2;
    // echo $a;
}
fn2();
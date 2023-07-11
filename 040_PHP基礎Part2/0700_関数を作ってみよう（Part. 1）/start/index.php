<?php
$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($numbers) {
    $sum = 0;
    foreach($numbers as $num) {
        $sum = $num;
    }
    return $sum;
}

$result = sum($numbers);
echo "合計: {$result}<br>";
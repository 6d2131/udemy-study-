<?php 

$char = 'aAabd1_sscc';
if(preg_match('/aAa/', $char, $result)) {
    echo '検索成功';
    print_r($result);
} else {
    echo '検索失敗';
}

$char = 'aAabd1_sscc';
if(preg_match('/\wAa/', $char, $result)) {
    echo '検索成功';
    print_r($result);
} else {
    echo '検索失敗';
}
<?php 
// if(true){

// }   
// elseif(true){

// }
// else {

// };
$i = 50;
$kesseki = 5;
if($i < 50 || $kesseki >= 5) {
    echo '不合格';
}elseif($i >= 50 && $i < 70){
    echo '合格';
}else{
    echo '秀';
}
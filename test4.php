<?php
mb_internal_encoding('utf-8');

// 3 задание


$Arr = array(1, 1, 2, 3, 4 -51, 12, 12, 12, -51);
$Arr_len = sizeof($Arr);

$num = 0;

for($i=0; $i < $Arr_len; $i++){
    if($Arr[$i] === $Arr[$i+1]){
        $num++;
    }
 }

echo 'num='. $num;



















<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
$size = count($array);
$chuoi = "Các số từ 100 đến 200 và chia hết cho 5 trong mảng là:";
for($i = 0; $i<$size; $i++){
    if($array[$i] >=100 && $array[$i] <=200 && $array[$i] % 5 ==0){
        echo " ".$array[$i];
    }
}

?>
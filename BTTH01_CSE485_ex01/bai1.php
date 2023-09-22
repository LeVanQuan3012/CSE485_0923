<?php
    $arrs = [2,5,6,9,2,5,6,12,5];
    $size = count($arrs);
    $tong = $arrs[0];
    $hieu = $arrs[0];
    $tich = $arrs[0];
    $thuong = $arrs[0];
    for($i=1; $i<$size; $i++){
        $tong += $arrs[$i];
        $hieu += $arrs[$i];
        $tich *= $arrs[$i];
        $thuong /= $arrs[$i];
    }
    $chuoitong = "Tổng các phần tử = ";
    $chuoihieu = "Hiệu các phần tử = ";
    $chuoitich = "Tích các phần tử = ";
    $chuoithuong = "Thương các phần tử = ";
    
    for($i=0; $i<$size; $i++){
        if($i == $size - 1){
            $chuoitong .= $arrs[$i]." = ";
            $chuoihieu .= $arrs[$i]." = ";
            $chuoitich.= $arrs[$i]." = ";
            $chuoithuong .= $arrs[$i]." = ";
        }
        else{
            $chuoitong .= $arrs[$i]." + ";
            $chuoihieu .= $arrs[$i]." - ";
            $chuoitich .= $arrs[$i]." * ";
            $chuoithuong .= $arrs[$i]." / ";
        }
        
    }

    echo $chuoitong.$tong."<br>";
    echo $chuoitich.$tich."<br>";
    echo $chuoihieu.$hieu."<br>";
    echo $chuoithuong.$thuong;

?>
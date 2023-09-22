<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$tong=0;
$size = count($numbers);
for($i=0; $i<$size; $i++){
    $tong += $numbers[$i];
}

$tb = $tong/$size;
echo "Giá trị trung bình = ".$tb."<br>";

$chuoilon = "Giá trị lớn hơn giá trị trung bình:";
$chuoibe = "Giá trị nhỏ hơn hoặc bằng giá trị trung bình:";
for($i=0; $i<$size; $i++){
    if($numbers[$i]>$tb){
        $chuoilon .= " ".$numbers[$i];
    }
    
    if($numbers[$i]<=$tb){
        $chuoibe .= " ".$numbers[$i];
    }
}
echo $chuoilon."<br>";
echo $chuoibe."<br>";
?>
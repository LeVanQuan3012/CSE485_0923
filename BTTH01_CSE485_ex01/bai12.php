<?php 
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

echo "Phần tử đầu tiên của mảng: ".$numbers['key1']."<br>";
echo "Phần tử cuối cùng của mảng: ".$numbers['key6']."<br>";

$max = $numbers['key1'];
$min = $numbers['key1'];
$tong =0;
foreach($numbers as $key => $value){
    if($max < $value){
        $max = $value;
    }
    if($min > $value){
        $min = $value;
    }
    $tong += $value;
}

echo "Số max = ".$max."<br>";
echo "Số min = ".$min."<br>";
echo "Tổng = ".$tong."<br>";

asort($numbers); // Sắp xếp mảng theo chiều tăng giá trị
print_r($numbers);
echo "<br>";

arsort($numbers); // Sắp xếp mảng theo chiều giảm giá trị
print_r($numbers);
echo "<br>";

ksort($numbers); // Sắp xếp mảng theo chiều tăng key
print_r($numbers);
echo "<br>";

krsort($numbers); // Sắp xếp mảng theo chiều giảm key
print_r($numbers);

?>
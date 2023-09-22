<?php 
$array1 = [[77, 87],[23, 45]];
$array2 = ['giá trị 1', 'giá trị 2'];

$array = array(
    0 => [$array2[0],$array1[0][0],$array1[0][1]],
    1 => [$array2[1],$array1[1][0],$array1[1][1]]
);

print_r($array);

?>
<?php
$arrs1 = ['1', 'b', 'c', 'd'];
$arrs2 = ['a', 0, null, false];

$size1 = count($arrs1);
$size2 = count($arrs2);

for($i=0; $i<$size1; $i++){
    $arrs1[$i] = strtoupper($arrs1[$i]);
}
for($i=0; $i<$size2; $i++){
    $arrs2[$i] = strtoupper($arrs2[$i]);
}

print_r($arrs1);
echo "<br>";
print_r($arrs2);
?>
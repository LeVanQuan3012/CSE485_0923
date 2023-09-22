<?php
$a = [
    'a' => ['b' => 0,'c' => 1],
    'b' => ['e' => 2,'o' => ['b' => 3]]
];

$giatri3 = $a['b']['o']['b'];
echo $giatri3;
echo "<br>";

$giatri1 = $a['a']['c'];
echo $giatri1;
echo "<br>";

$thongtina = $a['a'];
print_r($thongtina);

?>
<?php

// Работа с %

$a = 10;
$b = 3;

$rest = $a % $b;

echo $rest;

echo "<br>";
echo "\n";

if ($rest == 0) {
    echo "Делится без остатка с результатом: ";
    echo $a / $b;
}
else {
    echo "Делится с остатком: ";
    echo $rest;
}

echo "<br>";
echo "\n";

// Работа со степенью и корнем

$st = pow(2,10);
echo sqrt(245);

echo "<br>";
echo "\n";

$array = array(4,2,5,19,13,0,10);
$sum = 0;
foreach ($array as $value) {
    $sum += pow($value, 2);
}
echo "Результат операций с массивом: " . sqrt($sum);

echo "<br>";
echo "\n";

// round

$res379 = sqrt(379);

echo round($res379);
echo "<br>";
echo "\n";
echo round($res379,1);
echo "<br>";
echo "\n";
echo round($res379,2);

echo "<br>";
echo "\n";

// floor, ceil

$res587 = sqrt(587);

$floor_ceil = array(
    "floor" => floor($res587),
    "ceil" => ceil($res587)
);

// min ,max

$minmax = array(4,-2,5,19,-130,0,10);

echo min($minmax);
echo "<br>";
echo "\n";
echo max($minmax);

// random

echo rand(1,100);

for ($i = 0; $i < 10; $i++) {
    $randArr[] = rand();
}

foreach ($randArr as $value) {
    echo $value . " ";
}

echo "<br>";
echo "\n";

// Работа с модулем

for ($i = 0; $i < 3; $i++) {
    $a = rand(1, 25);
    $b = rand(1, 25);
    echo abs($a - $b);
    echo "<br>";
    echo "\n";
}

$natArr = array(1,2,-1,-2,3,-3);
$posArr = array();

foreach ($natArr as $value) {
    $posArr[] = abs($value);
}

foreach ($posArr as $value) {
    echo $value . " ";
}


echo "<br>";
echo "\n";

// Общее

// 1

$anyNum = 28;

$anyArr = array();

for ($i=1; $i <= 28; $i++) {
    if (($anyNum % $i) == 0) {
        $anyArr[] = $i;
    }
}

foreach ($anyArr as $value) {
    echo $value . " ";
}

echo "<br>";
echo "\n";

// 2

$sumArr = array(1,2,3,4,5,6,7,8,9,10);
$sum10 = 0;
$counter = 0;
foreach ($sumArr as $value) {
    $sum10 += $value;
    $counter += 1;
    if ($sum10 > 10) {
        echo "Количество первых элементов массива: $counter.";
        break;
    }
}

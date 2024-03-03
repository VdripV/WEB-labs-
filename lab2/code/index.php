<?php

$randArr = array();
$randNum = rand(1, 10);

for ($i = 0; $i < $randNum; $i++) {
    $randArr[] = rand(1, 100);
}

foreach ($randArr as $elem) {
    echo $elem . ' ';
}

echo "<br>";
echo "\n";

$avValue = array_sum($randArr) / count($randArr);
echo $avValue;

echo "<br>";
echo "\n";

function ArithmProgress($x) {
    return $x*($x + 1) / 2;
}

echo ArithmProgress(100);

echo "<br>";
echo "\n";

$randArr = array();
$randNum = rand(1, 10);

for ($i = 0; $i < $randNum; $i++) {
    $randArr[] = rand(1, 100);
}

foreach ($randArr as $elem) {
    echo $elem . ' ';
}

echo "<br>";
echo "\n";

$sqrtArr = array_map('sqrt', $randArr);

foreach ($sqrtArr as $elem) {
    echo $elem . ' ';
}

echo "<br>";
echo "\n";

$keys = range('a', 'z');
$values = range(1, 26);
$key_valueArr = array_combine($keys, $values);

foreach ($key_valueArr as $key => $value) {
    echo "key: $key; value: $value";
    echo "<br>";
    echo "\n";
}

$str = '1234567890';
$sum = intval($str[0].$str[1]) + intval($str[2].$str[3]) + intval($str[4].$str[5]) + intval($str[6].$str[7]) + intval($str[8].$str[9]);
echo $sum;

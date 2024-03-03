<?php

function TrueOrFalse($x1, $x2) {
    if (($x1 + $x2) > 10) {
        return true;
    }
    else {
        return false;
    }
}

echo TrueOrFalse(10, 2);

echo "<br>";
echo "\n";

function EqualOrNot($x1, $x2) {
    if ($x1 == $x2) {
        return true;
    }
    else {
        return false;
    }
}

echo EqualOrNot(10, 10);

echo "<br>";
echo "\n";

$test = 0;

if (!$test) echo "верно";

echo "<br>";
echo "\n";


function age() {
    $age = rand(-250,250);
    $sum = 0;
    if (($age < 10) or ($age > 99)) {
        echo "Переменная age больше 99 или меньше 10";
    }
    else {
        while ($age > 0) {
            $digit = $age % 10;
            $sum += $digit;
            $age = (int)($age / 10);
        }
        echo "Сумма в диапазоне от 10 до 99";
    }

    echo "<br>";
    echo "\n";

    if ($sum <= 9) {
        echo "Сумма цифр однозначна";
    }
    else echo "Сумма цифр двузначна";
}

echo age();

echo "<br>";
echo "\n";


function randArr() {
    $randNum = rand(1,10);
    $randArr = array();
    for ($i=0; $i<$randNum;$i++) {
        $randArr[] = rand(0,20);
    }
    $sum = 0;
    if (count($randArr) == 3) {
        foreach ($randArr as $elem) {
            $sum += $elem;
        }
    }

    if ($sum != 0) {
        return $sum;
    }
    else return "Массив не состоит из 3-х элементов";
}

echo randArr();
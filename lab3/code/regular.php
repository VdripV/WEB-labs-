<?php

// 1.a

$str = 'ahb acb aeb aeeb adcb axeb';
$reg = '/a..b/';
preg_match_all($reg, $str, $matches);

foreach($matches[0] as $i) {
    echo $i."<br>";
}

// 1.b

$str = 'a1b2c3';

function degree($matches) {
    return pow($matches[0], 3);
}

$new_str = preg_replace_callback('/\d+/', 'degree', $str);

echo $new_str;




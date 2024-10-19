<?php
//3.3

$emails = ["gover.ment_1@hfs.com", "ap.ple_091@kds.org", "ball@ope.ru", "um.brel.la123@a6.uk", "rain057@ov.c", "n.u.m.b.e.r._0@fff.com"];
$impl = implode(" ", $emails);
// echo $impl;
if (preg_match_all('/\b(?:[a-zA-Z.]+)*[0-9_]*@(?:[a-zA-Z0-9]+\.(?:com|ru|uk|org))\b/', $impl, $arr)) {
    // print_r($arr);
    foreach ($arr[0] as $k => $v) {
        echo "Електронна пошта: $v" . "\n";
    }
} else {
    echo "no";
}

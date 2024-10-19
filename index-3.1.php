<?php
//3.1

$photos = ["img_13323.jpg", "img_923.httf", "img_453.jpg", "img_054.gif", "img_4593.png", "img_104.kkl", "img_6.fsa"];
$impl = implode(" ", $photos);
// echo $impl;
if (preg_match_all('/\bimg_[0-9]*\.(jpg|png|gif)\b/', $impl, $arr)) {
    // print_r($arr);
    foreach($arr[0] as $key => $value){
        echo "Фото: $value" . "\n";
    }
} else {
    echo "no";
}

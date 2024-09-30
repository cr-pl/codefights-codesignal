<?php
//https://codefights.com/challenge/fcLf5cdBqEPPTuSSB
//Determine if Three Side Lengths Are a Triangle
//me 58 chars
function triangle_($a, $b, $c) {
    return abs($a-$b)<$c & $c< $a+$b;
}
//60
//function triangle_($a, $b, $c) {
//    return 2*max($a,$b,$c)< $a+$b+$c;
//}
//64
//function triangle_($a, $b, $c) {
//    return $a+$b>$c && $a+$c>$b && $c+$b>$a ;
//}

/*
Test
echo triangle_(8,4,2);
*/
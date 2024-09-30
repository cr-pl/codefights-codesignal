<?php
//https://codefights.com/challenge/e68HxZ8Qo5jF7Mjxi
//153 chars
function P($m) {
    $o= $m  & $m>1 ;
    for($j = 3; $o & $j*$j <= $m; $j += 2)
        $m % $j <1 ? $o= 0 : 0;
            
    return $o | $m==2; 
}

function primeDistance($n) {
    while(!P($n-$i) & !P($n+$i)  )
       $i++;
    return $i|0;
}
//167 chars
//function P($m) {
//    $o= !($m == 1 | $m % 2 <1);
//    for($j = 3; $o & $j*$j <= $m; $j += 2)
//        $m % $j <1 ? $o= 0 : 0;
//            
//    return $o | $m==2; 
//}
//
//function primeDistance($n) {
//    for(;$i<99;$i++)
//        if(P($n+$i) |  P($n-$i))
//            return $i|0;
//}

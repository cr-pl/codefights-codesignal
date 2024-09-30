<?php
//https://codefights.com/challenge/Qk4DePWLz72jnfsXy
// 170
function f($a,$b){
    return $a<$b ? range($a,$b) : array_merge(range(1,$b),range($a,365));
}
function flowersAndFlorets($a, $b, $c, $d){
    return count(array_intersect(f($a, $b), f($c, $d)));
}
/*
echo( flowersAndFlorets(10,20,1,365));//11
echo flowersAndFlorets(360,10,1,365);//16
*/
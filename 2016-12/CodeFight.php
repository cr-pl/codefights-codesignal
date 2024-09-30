<?php
// https://codefights.com/challenge/okok2rHiWhetqWZfR/solutions/acJtPpx5MzQ5ArMPn
//132
function CodeFight($n) {
   for($i=1;$i<=$n;$i++){
      $b= $i%5;
      $d= $i%7;
       
      $r[] = $b && $d ? ''.$i:(!$b & !$d ? $c.$f : (!$b ? $c='Code' : $f='Fight'));
   }
   return $r;
}
/*
tests
$n=100;
var_dump(CodeFight($n));
var_dump(["1", 
 "2", 
 "3", 
 "4", 
 "Code", 
 "6", 
 "Fight", 
 "8", 
 "9", 
 "Code", 
 "11", 
 "12", 
 "13", 
 "Fight", 
 "Code"]);
 */
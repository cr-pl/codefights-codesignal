<?php
//https://codefights.com/challenge/7mZGy8xF3exJveRuj/solutions
//me 195 chars
function Square_Check($p) {  
    list($a,$b,$c,$d,$e,$f,$g,$h)=$p;

   return   ($l= d($a,$b,$c,$d))==2*($z= d($a,$b,($a+$c+$e+$g)/4,($b+$d+$f+$h)/4)) | 4*$z==$l  ;

}

function d($a,$b,$c,$d){ 
   return ($c-$a)**2+($d-$b)**2;  
}


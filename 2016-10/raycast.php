<?php
//https://codefights.com/challenge/KCdMLuWJyYvARCoEB
//821
//distance AB
function d($a,$b){ return sqrt(pow($b[0]-$a[0],2)+pow($b[1]-$a[1],2)+pow($b[2]-$a[2],2));  }

//triangle area
function A($t){
    $a=d($t[0],$t[1]);
    $b=d($t[0],$t[2]);
    $c=d($t[1],$t[2]);
    $p=($a+$b+$c)/2;
    return sqrt($p*($p-$a)*($p-$b)*($p-$c));
}

function raycast($t, $r) {
    $d=$r[0][0]; $e=$r[0][1]; $f=$r[0][2];
    $a=$r[1][0]; $b=$r[1][1]; $c=$r[1][2];
    
    $E=$t[0][0]; 
    $F=$t[0][1]; 
    $G=$t[0][2];
    $H=$t[1][0]; 
    $I=$t[1][1]; 
    $J=$t[1][2];
    $K=$t[2][0]; 
    $L=$t[2][1]; 
    $M=$t[2][2];
    
    $A=($I-$F)*($M-$G)-($L-$F)*($J-$G);
    $B=($J-$G)*($K-$E)-($M-$G)*($H-$E);
    $C=($H-$E)*($L-$F)-($K-$E)*($I-$F);

    
    $T=($E*$A + $F*$B +$G*$C-$A*$d - $B*$e - $C*$f) / ($A*$a + $B*$b + $C*$c);
    $i= [
        $d+$a*$T,
        $e+$b*$T,
        $f+$c*$T
    ];
    
    $e=d($r[1],$i);
    $h=round;
    return trim(A($t))==trim((A([$t[0],$t[1],$i])+A([$t[2],$t[0],$i])+A([$t[1],$t[2],$i]))) && !($e>d($r[0],$i) && $e>d($r[0],$r[1])) ?  
            [$h($i[0],2),$h($i[1],2),$h($i[2],2),$h(d($r[0],$i),2)]:[];
}

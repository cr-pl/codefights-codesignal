<?php
//https://codefights.com/challenge/QLdW6grw8hEr75tLu
//118
function CompletetheSequence($s) {
    list(,$s, $r, $q) = explode(',',$s);
    return  2*$r-$q == $s  ? 2*$q-$r : (
                $q-$r == $s ?  $q+$r : $q*$r/$s
            );
}
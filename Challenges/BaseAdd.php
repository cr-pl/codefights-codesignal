<?php
//https://codefights.com/challenge/rXBQajNqcNeqx32Mz
//109
function BaseAdd($a, $b, $c, $d) {
    $Y= base_convert;

    $f=$Y($a,$b,10);
    $g=$Y($c,$d,10);
    return   $Y($f+$g,10,$f>$g ? $b :$d );
}

//echo BaseAdd(11,2,10,10);
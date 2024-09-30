<?php
//https://codefights.com/challenge/KEbTTLutFqbTvs4mu
//68 chars
function rangeXOR($a, $b) {
    return $a * ($a & 1) ^ $b * !($b & 1) ^ !!(2 & ($a ^ $b) + 1 );
}

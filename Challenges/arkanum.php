<?php
//https://codefights.com/challenge/PzopPgjFSWqvJu57T
//560
function K($G, $v, $t, $c) {
    for ($i = 0; $i < $c; )
        if ($G[$t][$i] > $v[$i++])
            return 0;
    return 1;
}

function B($G, $P, $V, $O, &$S) {
    $O[d] += 1;
    for ($t = 0; $t < count($G); $t++) 
        if ($S > $O[d] & K($G, $V, $t, $c= count($V))) {
            $B = [i => $t, d => $O[d]];

            $N = $V;
            for ($z = 0; $z < $c; $z++) 
                $N[$z] += -$G[$t][$z] + $P[$t][$z];
            

            if ($N[0]) {
                $B[C] = $O[d];
                $S = $O[d] < $S ? $O[d] : $S;
            } else {
                $O[d] < $S ?  $C = B($G, $P, $N, $B, $S): 0;

                foreach ($C as $n)
                    $n[C] ? $B[C] = $n[C] : 0;
            }
            $B['c'] = $C;
            $O[] = $B;
        
    }

    return $O;
}

function arkanum($G, $P, $V) {
    $S = 8;
    $r = B($G, $P, $V, [d => -1], $S);

    for ($j = 0; $j < 9; $j++) 
        foreach ($r as $k => $i) 
            if (is_numeric($k) && $i[C] == $S) {
                $o[] = $i[i];
                $r = $i[c];
            }
        
    
    return $o;
}

/*
$ingredients= [[0,16,8,6,4,8,14,12], 
 [0,12,3,4,11,13,0,0], 
 [0,0,3,4,0,5,0,0], 
 [0,0,1,12,11,0,0,0], 
 [0,0,0,5,0,0,0,0], 
 [0,0,0,13,0,0,5,0], 
 [0,5,0,0,1,0,1,0], 
 [0,2,0,0,3,0,11,0], 
 [0,0,11,0,0,0,0,10]];
$products= [[0,12,14,0,5,11,0,27], 
 [0,5,0,0,0,22,22,9], 
 [0,0,19,23,17,0,0,0], 
 [0,19,21,16,11,10,0,0], 
 [0,11,3,24,0,0,0,17], 
 [0,9,0,0,0,0,0,0], 
 [0,8,0,29,24,20,0,18], 
 [0,0,0,13,0,17,0,23], 
 [4,17,29,0,0,0,19,26]];
$inventory= [0, 0, 0, 5, 0, 0, 0, 0];
//Expected Output:[4, 4, 4, 4, 8]

echo join(',', arkanum($ingredients, $products, $inventory)); 
*/
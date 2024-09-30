<?php
//64 (best score)
function makeSentence($w) {
    return join(' ',array_map(join,$w)).'.';
}

/*
$words=[["G","o","o","d"],  ["m","o","r","n","i","n","g"]];
//echo makeSentence($words);
var_dump(makeSentence($words));
*/

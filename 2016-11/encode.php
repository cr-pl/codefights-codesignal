<?php
//https://codefights.com/challenge/u48jf3T4spZ4J8aDg
function encode($s) {
    //return preg_replace('/(.)\1*/e', 'strlen($0) . $1', $str); //https://github.com/acmeism/RosettaCodeData/blob/master/Task/Run-length-encoding/PHP/run-length-encoding.php
return preg_replace_callback('{(.)\1*}', function($m){
    return  $m[1].strlen($m[0]);
}, $s);
}
//function encode($s) {
//    return preg_replace_callback('{([a-z])\1*}', function($m){
//        return  $m[1].strlen($m[0]);
//    }, $s);
//}

/*
Tests:
$s = "aabbbccc";//"a2b3c3"
$s= "aaaaaaaaaaaa Ybcddhhqww";
$s= "aa3ttq";
echo encode($s);
*/
<?php
//178 chars
function findOperation($v, $r) {
   while(1){
       foreach($v as $i=>$e)
           $m=$i?$m.' '."/-*+"[str_pad(base_convert($l++,10,4),count($v),0,0)[$i]].' '.$e:$e;
       if(eval("return $m ;")==$r) 
           return "$m = $r";
   }
}

//me v2
//function findOperation($v, $r) {
//    $o=['/','*','-','+'];
//    $n=count($v);
//    $F=base_convert;
//    
//    for($l=0;$l<$F(str_repeat("3", $n-1),4,10);$l++){
//        $m='';
//        foreach($v as $i=>$e)
//            $m.=$i?' '.$o[str_pad($F($l,10,4),$n,0,0)[$i]].' '.$e:$e;
//        if(eval("return $m ;")==$r) 
//            return $m." = $r";
//    }
//}
/*
Tests
$v= [1, 3, 2, 3];
$r= 1;//"1 / 3 + 2 / 3 = 1";

//$v= [59, 0, 81, 55, 66];
//$r= 40;//"59 * 0 - 81 + 55 + 66 = 40"

echo findOperation($v, $r);
*/
<?php
function reverseParentheses($s) {
    preg_match_all('/\(/',$s,$o,256);
    preg_match_all('/\)/',$s,$c,256);
    $n = count($o[0]);


    //before first
    $r=substr($s,0,$o[0][0][1]);
    if($n==1)
        $r .= strrev(substr($s,$o[0][0][1],$c[0][0][1]));
            
    if($n>=2){
        $r.=
            strrev(substr($s,$c[0][0][1],$c[0][1][1]-$c[0][0][1]))
            .substr($s,$o[0][1][1],$c[0][0][1]-$o[0][1][1])
            .strrev(substr($s,$o[0][0][1],$o[0][1][1]-$o[0][0][1]))
            ;
        
        
        
    }
    //after last
    $r.=substr($s,$c[0][$n-1][1]);

    return $r;
    return preg_replace(['/\(/','/\)/'],'',$r);
}

/*
Tests
//$s= "a(bc)de";
$s= "Code(Cha(lle)nge)"; //"CodeegnlleahC"
$s= "a(bcdefghijkl(mno)p)q";//"apmnolkjihgfedcbq"
echo reverseParentheses($s);
*/

/*
Js
function reverse(s)
{
  while(t = s.match(m = /\((\w*)\)/  ))
  {
    g = ""
    for(i in y = t[1])
       g = y[i] + g
    s = s.replace(m, g)
  }
  return s
}
 * 
 * 
    while (m = /\((\w*)\)/.exec(s))
        s = s.replace(m[0], m[1].split('').reverse().join(''))
   return s
}
 * 
 */

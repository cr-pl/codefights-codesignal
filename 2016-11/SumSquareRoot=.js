//https://codefights.com/challenge/C3PNZHBXqFEi6hdQn

//Solution 1: 92 chars
//h= l =>l.filter(b =>  l.indexOf(b*b)>=0 )
//SumSquareRoot=l=> l [0] ? h(l)[0] ? h(l).reduce((a, b) => a + b):0 : 0

//Solution 2: arrow function && self-calling func, 63
//s=0 
//SumSquareRoot=l=> 
//    () => {
//    for(b of l)
//         l.indexOf(b*b)>=0 ? s+= b :0
//    }() | s   
//62 chars
SumSquareRoot=l=> {  
s=0
   for(b of l)
        l.indexOf(b*b)>=0 ? s+= b :0
   return s 
}

/*
//Tests
$l= [1]; //1
$l= [1, 6, 3, 9, 36]; //10
$l= [7, 11, 16, 64, 49, 4, 8, 121]; //30
console.log(SumSquareRoot($l) );
$l= []; //0
$l= [50, 37, 85, 44, 32, 13, 85, 89, 79, 50, 73, 20, 47, 6, 74, 29, 10, 8, 89, 57]; //0
$l= [2, 3, 2, 4, 5, 9, 9];
*/

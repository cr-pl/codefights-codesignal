//https://codefights.com/challenge/Y7C33HX5SWeb8vEKd
//74
r=''
iqAddress=n=> {
    
    while(n>1){
        r =  (n%10.5).toFixed(1)+r
        n=n/2+n%2/2
    }
        
    return 1 + r

}
// console.log(iqAddress(21));

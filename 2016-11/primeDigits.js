// https://codefights.com/challenge/PYqXBbXgEoDeZmJm3
//127 chars
primeDigits= N=> {
    a=0
    for(i=N;i>1; i--)
        if(!(""+i).match(/(0|1|4|6|8|9)/))
            {              
                o= i& 1 
                for(j = 3; j*j <=i; j +=  2)
                    i % j<1 ? o= 0 : 0
                o | 2==i ? a++ :0
            }
        
    return a
}
/*
Tests
N= 11;//4
N= 10000;//61
*/
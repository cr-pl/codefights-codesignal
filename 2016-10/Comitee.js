//https://codefights.com/challenge/m6SfNi5g3ZbGvMgCL
//216
Committee=h=>{
    k=v=>v.split(':')
    q=p=>{
        r=[]
        for(l of p){
            y=0
            for(x of p)
                for(z of k(x)[1].split(','))
                    if(' '+k(l)[0]==z) y++
            if(y<=p.length/2)
                r.push(l)
        }
        return r.join() != p.join() ? q(r) : r
    }
    v=[]
    for(l of q(h)){
        v.push(k(l)[0])
    }
    return v.sort()
}
/*
input=  [
    "Hillary: Donald, Gary, Jill, Darrell", 
    "Donald: Hillary, Gary, Jill, Evan", 
    "Gary: Hillary, Donald, Jill, Darrell, Evan", 
    "Jill: Gloria", 
    "Darrell: Jill, Evan", 
    "Evan: Darrell, Jill", 
    "Gloria: Darrell, Evan, Hillary, Donald, Alyson", 
    "Alyson: Gloria, Gary"]

//donald 3/8 ; Gary 3; jill 5; darell 4; hillary 3; gloria 2;  evan 4; Alyson 1
// output alison, gloria
*/
/*
input= ["Ad H: Av Bn, Ab Nb, Aaa, Aa, Ba Ab, Has Ab", 
 "Ad N: Has Ab, Ba Ab, AAa Ghm, Al N, Av Bn", 
 "Al N: Aftr, A, Ad, Av Bn", 
 "Al H: Ad, Ab Nb, A, Aaa, Ba Ab, Al N, Ab ash, Aftr", 
 "Ab Nb: Aftr, Ad H, Has Ab, Ad, Av Bn, Nb Bn, Ba Ab, Al H, Al N, Ad N", 
 "Av Bn: Has Ab, Ab ash, Al H, Ad H, Ab Nb, Aa, Nb Bn, Aaa, Ba Ab, Aftr", 
 "Nb Bn: Aa, Ab Nb, Ad H, Ba Ab", 
 "Ad: Ab Nb, Aaa, A, Aa, Ba Ab, Al H, Has Ab, Ab ash, Nb Bn", 
 "Ab ash: Ad, AAa Ghm, A, Has Ab, Ba Ab", 
 "Has Ab: Al N, Av Bn, Nb Bn, A, Ad N", 
 "AAa Ghm: Ad, Av Bn, Ba Ab, Ad H, Aa, Ab Nb, Aftr, Ab ash, Nb Bn, A, Al N", 
 "Aftr: Ad N, Aaa, Ad H, Has Ab, Ad, Al H", 
 "A: Av Bn, Aftr, Has Ab, Ad, AAa Ghm, Ad N, Ab Nb, Ba Ab, Al H, Nb Bn", 
 "Aa: Ab ash, Has Ab, Al H, Aftr, Nb Bn", 
 "Aaa: Ba Ab, Ab Nb, Al N, Aa, Ad, Al H", 
 "Ba Ab: Ad, Ad N, Al H, A, Aa, Ab ash, Aftr, Has Ab"]
console.log(Committee(input));
*/
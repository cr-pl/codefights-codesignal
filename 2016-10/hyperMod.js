hyperMod=(a, b, n, m)=>{
    f=(a, b, n)=>{ 
        if(n==0) return b+1
        else if(b==0){
            if(n==1 ) return a
            if(n==2 ){
                return 0
            }else return 1
        }else{
//            if(n=0) return b+1
//            else{
                return f(a,f(a,b-1,n),n-1)
            //}
        }
    }
    return f(a, b, n)%m;
}
  
console.log(hyperMod(3,3,4,999999));//110592
//console.log(hyperMod(2,985974312,4,1000000007));//661944226
//console.log(hyperMod(2,4,4,2147483647));//65536
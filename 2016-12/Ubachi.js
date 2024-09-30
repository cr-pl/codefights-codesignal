//https://codefights.com/challenge/WbDRnJGc7TYLdtkcp
function u(m,p){
    for(;i<d=strlen(m)/c=strlen(p);i++){
        for(k=j=h=r='';j<c;r.=m[j++ * d + i]);
        for(;k<c;h.=r[p[k++]]);

        a+=h;
    }

    return a;
}
function Ubachi(m, w) {
    b=a=str_split(w);
    sort(b);
    foreach(a as l){
        p.=array_search(l,b)+substr_count(t, l);
        t.=l;
    }
    return u(u(m,p),p);    
}
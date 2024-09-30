//https://codefights.com/challenge/9o3s9u8gf9f6piHgC
//645 
equationSystem=p=>{
    t=e=> e.split('=')
    f=s=>s.split(/x|y|z/)
    n=m => !m?1:(isNaN(m) ? (eval(m+1)) : m)
    D=a=> (a[0][0]*(a[1][1]*a[2][2]-a[1][2]*a[2][1]) - a[0][1]*(a[1][0]*a[2][2]- a[1][2]*a[2][0]) + a[0][2]* ( a[1][0] *a[2][1]- a[1][1]*a[2][0]  ) ) 
    L=f(t(p[0])[0])
    R=t(p[0])[1]
    M=f(t(p[1])[0]) 
    S=t(p[1])[1]
    N=f(t(p[2])[0])
    T=t(p[2])[1]

    d=D([[n(L[0]),n(L[1]),n(L[2])],
        [n(M[0]),n(M[1]),n(M[2])],
        [n(N[0]),n(N[1]),n(N[2])]
    ])
    
    Z=Math.round
    
    return [Z(D([[n(R),n(L[1]),n(L[2])],
        [n(S),n(M[1]),n(M[2])],
        [n(T),n(N[1]),n(N[2])]
    ])/d),Z(D([[n(L[0]),n(R),n(L[2])],
        [n(M[0]),n(S),n(M[2])],
        [n(N[0]),n(T),n(N[2])]
    ])/d),Z(D([[n(L[0]),n(L[1]),n(R)],
        [n(M[0]),n(M[1]),n(S)],
        [n(N[0]),n(N[1]),n(T)]
    ])/d)]
}
/*
input=[
"-2x+2y+6z=21", 
 "6x+3y-5z=7", 
 "3x-10y+6z=35"
];
console.log(equationSystem(input));
*/

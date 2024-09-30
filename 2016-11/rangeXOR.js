//https://codefights.com/challenge/KEbTTLutFqbTvs4mu
//66 chars
rangeXOR=(a, b) =>a * (a & 1) ^ b * !(b & 1) ^ !!(2 & (a ^ b) + 1 )

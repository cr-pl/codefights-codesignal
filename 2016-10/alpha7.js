//https://codefights.com/challenge/sFkwfs4hH6D8HxNYB
//96
alpha7 = s => {
    r = 0
    for (i in s) {
        r +=(s[i].charCodeAt() - 97) * Math.pow(26, s.length - i - 1)
    }
   return r.toString(7)
}   
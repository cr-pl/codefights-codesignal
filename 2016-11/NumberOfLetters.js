//https://codefights.com/challenge/wcNrgbtmpWWn4DTwu
//516 chars
arr = x => Array.from(x);
num = x => Number(x) || 0;
str = x => String(x);
isEmpty = xs => xs.length === 0;
take = n => xs => xs.slice(0,n);
drop = n => xs => xs.slice(n);
reverse = xs => xs.slice(0).reverse();
comp = f => g => x => f (g (x));
not = x => !x;
chunk = n => xs =>
  isEmpty(xs) ? [] : [take(n)(xs), ...chunk (n) (drop (n) (xs))];
c = n => {
  a = [
    '', 'one', 'two', 'three', 'four',
    'five', 'six', 'seven', 'eight', 'nine',
    'ten', 'eleven', 'twelve', 'thirteen', 'fourteen',
    'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
  ];
  b = [
    '', '', 'twenty', 'thirty', 'forty',
    'fifty', 'sixty', 'seventy', 'eighty', 'ninety'
  ];
  g = [
    '', 'thousand', 'million'
  ];

  makeGroup = ([ones,tens,huns]) => {
    return [
      num(huns) == 0 ? '' : a[huns] + 'hundred',
      num(ones) == 0 ? b[tens] : b[tens] && b[tens] + '' || '',
      a[tens+ones] || a[ones]
    ].join('');
  };
  thousand = (group,i) => group === '' ? group : `${group} ${g[i]}`;
  if (typeof n === 'number') return c(String(n));
  //if (n === '0')             return 'zero';
  return comp (chunk(3)) (reverse) (arr(n))
    .map(makeGroup)
    .map(thousand)
    .filter(comp(not)(isEmpty))
    .reverse()
    .join``.replace(' ','');
};


function NumberOfLetters(n) {
    s=0
//    while (n != 4) {
//        n = c(n,0).length
//        s++
//    }
    c(n,0)
    return s 
}
/*
n = 377; //5
document.write( c(1000000));
*/

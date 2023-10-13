//what is recursion
//  function calling itself 
//<--------------------- RECURSION TREE------------------>

// sum of first n natural numbers
// function sum(n){
//     if(n<=1)
//         return 1; 
//     else
//         return sum(n-1)+n;
// }
//  console.log(sum(4));
//fibbonacci series using recursion 
//  function fibb(n){ // perticular version of fibbonacci
//     if(n==1 || n==2)
//         return 1;
//     else
//         return fibb(n-1)+fibb(n-2);
//  }
//  console.log(fibb(6));
// power of number
// function power(m,n){
//     if(n==0)
//         return 1;
//     if(n==1)
//         return m;
//     else    
//         return m*power(m,n-1);
// }
// console.log(power(2,0));
// we have to optimize this solution 
//fibbonacci series
// function fib(n){
//     const fibo = [0,1];
//     for(let i = 2;i<n;i++)
//     {
//         fibo[i] = fibo[i-1]+fibo[i-2];
//     }
//     return fibo;
// }
// console.log(fib(2))
// console.log(fib(6))
// console.log(fib(1))
// console.log(fib(0))
// console.log(fib(3))
// <----------------------------->
// factorial of a Number
// function factorial(n)
// {
//     let fact = 1;
//     for(let i = 1;i<=n;i++)
//     {
//         fact = fact*i;
//     }
//     return fact;

// }
// console.log(factorial(1))
// console.log(factorial(0))
// console.log(factorial(4))
// console.log(factorial(6))
// <------------------------------>
// prime number
// function isprime(n)
// {
//     for(let i = 2;i<=Math.sqrt(n);i++)
//     {
//         if(n%i===0){
//             // console.log( n + " is not a prime number")
//             return false
//             break;
//         }
//     }
//     // console.log(n + "is a prime number")
//     return true
// }
// console.log(isprime(2));
// console.log("hello")
// console.log(isprime(7));
// <------------------------>
//power of two
// function ispower2(n)
// {
//     if(n<1)
//     {
//         return false;

//     }
//     while(n>1)
//     {
//         if(n%2 !== 0)
//         {
//             return false;
//         }
//         n=n/2;
//     }
//     return true;
// }
// console.log(ispower2(8));
// console.log(ispower2(10));
// console.log(ispower2(36));
// <--------------------------->
// another efficiant way
// function ispowerusingbitwise(n){
//     if(n<1)
//         return false;
//     return (n & (n-1)===0);
// }

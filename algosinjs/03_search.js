// linear search
// function linear_search(arr,target)
// {
//     for(let i = 0;i<arr.length;i++)
//     {
//         if(arr[i]===target)
//             return i;
        
//     }
//     return -1;
// }
// console.log(linear_search([1,2,3,4,5,6,7,8,9],9));

// <------------------------------------>
// binary search
// function binary_search(arr,target){
//     let leftIndex = 0;
//     let rightIndex = arr.length-1;
//     while(leftIndex<=rightIndex)
//     {
//         let middleIndex = Math.floor((leftIndex +rightIndex)/2);
//         if(target === arr[middleIndex])
//             return middleIndex;
//         if(target < arr[middleIndex])
//             rightIndex = middleIndex-1;
//         else 
//             leftIndex = middleIndex+1;
//     }
// }
//recursive binary search
// function binary(arr, target) {
//     return search(arr, target, 0, arr.length - 1);
// }

// function search(arr, target, leftI, rightI) {
//     if (leftI > rightI)
//         return -1;
//     let middleI = Math.floor((leftI + rightI) / 2); // Corrected calculation
//     if (target === arr[middleI]) // Use arr[middleI] to access the element in the array
//         return middleI;
//     else if (target < arr[middleI]) {
//         return search(arr, target, leftI, middleI - 1);
//     } else {
//         return search(arr, target, middleI + 1, rightI);
//     }
// }

// console.log(binary([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 5));


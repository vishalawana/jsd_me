// bubble sort
// function bubbleSort(arr) {
//     const n = arr.length;
//     let swapped;

//     do {
//         swapped = false;
//         for (let i = 0; i < n - 1; i++) {
//             if (arr[i] > arr[i + 1]) {
    // Swap elements arr[i] and arr[i+1]
//                 const temp = arr[i];
//                 arr[i] = arr[i + 1];
//                 arr[i + 1] = temp;
//                 swapped = true;
//             }
//         }
//     } while (swapped);

//     return arr;
// }


// const unsortedArray = [64, 34, 25, 12, 22, 11, 90];
// const sortedArray = bubbleSort(unsortedArray);
// console.log(sortedArray);
// insertion sort
// function insertion(arr){
//     for(let i = 1; i < arr.length;i++){
//         let numberToInsert = arr[i];
//         let j = i-1;// j is referd to index of the sorted part
//         while(j>=0 && arr[j] > numberToInsert){
//             arr[j+1] = arr[j];
//             j = j-1;
//         }
//         arr[j+1] = numberToInsert;
//     }
    
// }
//  const arr = [8,20,-2,4,-6];
//  insertion(arr);
//  console.log(arr);
//QUICK SORT
function quick(arr){
    if(arr.length<2)
        return arr;
    let pivot = arr[arr.length-1];
    const left = [];
    const right = [];
    for(let i=0;i<arr.length-1;i++){
        if(arr[i] < pivot)
            left.push(arr[i])
        else
            right.push(arr[i])
    }
    return [...quick(left),pivot,...quick(right)];
}
const arr = [8,0,20,-2,4,-6];
console.log(quick(arr));
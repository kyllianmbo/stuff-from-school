var list = [1,6,3,5,2,7,3,8,0,4,5];

function findHighestNumber(arr){
    for (let i = 0; i < arr.length; i++) {
        if (i==0) {
            var highestNumber = arr[i];
        }
        if( arr[i] > highestNumber ){
            highestNumber = arr[i];
        }
    }
    return highestNumber;
}

var result = findHighestNumber(list);
console.log("Highest number in array is: " + result);   
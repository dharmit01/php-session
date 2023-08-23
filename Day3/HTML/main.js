console.log('Hello there!')
let arr = [1, 2, 3, 4, 5, 6, 7 ,8 ,9];

// arr.forEach((element) => {
//     console.log(element);
// });

let arr_odd = arr.filter(el => el % 2 !== 0);

let arr_obj = [
    {
        id: 1,
        name: "Dharmit",
        place: "Ahmedabad"
    },
    {
        id: 2,
        name: "Mihir",
        place: "Ahmedabad"
    },
    {
        id: 3,
        name: "Govind",
        place: "Mehsana"
    },
]

// arr_obj.forEach(obj => console.log(obj))

// let newArr = arr_obj.filter(obj => obj.place === "Ahmedabad")
// console.log(newArr);

// const fun = () => {}

// const newArr = [];
// newArr.push(1);
// newArr.push(2);
// newArr.push(3);
// console.log(newArr);

// Rest and Spread Operators

// Spread Operator
// let str = "dharmit";
// let strArray = [...arr];
// arr.push(10);
// arr.push(11);

// console.log(strArray);

// Rest Operator
// function sum(...args) {
//     let sum = 0;
//     console.log(args);

//     args.forEach(el => sum += el);
//     return sum;
// }

// let addTwo = sum(1,2);
// let addThree = sum(1,2,3);
// console.log(addTwo);
// console.log(addThree);


// let someObj = {
//     id: 1,
//     name: "Dharmit",
//     place: "Ahmedabad"
// }
// const { name, place } = someObj;
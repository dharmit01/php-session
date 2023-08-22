for (var i = 0; i < 5; i++) {
    (function (a) {
        setTimeout(() => {
            console.log(a);
        }, 0);
    })(i);

    // setTimeout(() => {
    //     console.log(i);
    // }, 0);
}

(function () {

})();

// console.log('a');

// for (let i = 0; i < 10000; i++) {
//     console.log('i');
// }

// setTimeout(function () {
//     console.log("Hey 2 seconds");
// }, 2000);

// setTimeout(function () {
//     console.log("Hey 0 seconds");
// }, 0);

// let b = 20;
// const c = 30;

// function test() {
//     var b = "test";
//     console.log(b);

//     function func1() {
//         console.log("Hello from fun1");
//         console.log(b);
//     }

//     return func1;
// }

// var func2 = test();
// func2();
// test()();


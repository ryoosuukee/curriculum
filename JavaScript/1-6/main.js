//問1
let scores = [10, 15, 20, 25];
console.log(scores);

for(let i = 0; i < scores.length; i++){
    if(scores[i] % 2 === 0){
        console.log(scores[i] + "は偶数です");
    }
}


//問2
let car = {
    gas: 20.5,
    num: 1234,
};

console.log("ガソリンは" + car.gas + "です");

console.log("ナンバーは" + car.num + "です");
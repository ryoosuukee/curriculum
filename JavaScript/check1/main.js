//問1
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
let num;

for(let i = 0; i < numbers.length; i++){

    if(numbers[i] % 2 === 0){
       
        num = numbers[i];
        isEven();
    }

    
}


function isEven() {
    console.log(num + 'は偶数です');
}




//問2

class Car{
    constructor(gas, Num){

        this.gas = gas;
        this.Num = Num;
        
    }

    getNumgas(){
        console.log(`ガソリンは${this.gas}です。ナンバーは${this.Num}です。`);
    }

}

let  set = new Car("〇〇", "△△");

set.getNumgas();


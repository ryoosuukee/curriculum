class Taiyaki{
    constructor(inside){
        this.inside = inside; 
    }

    //中身を出力する関数
    varity(){
        console.log(`中身は${this.inside}です`);
    }

}

let anko = new Taiyaki("あんこ");
let cream = new Taiyaki("クリーム");
let cheese = new Taiyaki("チーズ");

anko.varity();
cream.varity();
cheese.varity();
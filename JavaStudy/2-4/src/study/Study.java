package study;

//①FruitsConstants.javaをインポートしなさい。
import fruits.Fruits;

//②Fruits.javaをインポートしなさい。
import constants.FruitsConstants;

/**
 * 本課題では、基本的なJavaの構造と、importについて理解を深めていきましょう。
 *
 * 問①〜問③まであります。
 * 全て回答し、課題にある画像と同じ表示になるようにしてください。
 *
 */
public class Study {

    public static void main(String[] args) {

        /* ③ Fruits.javaのprintFruitsメソッドを呼び出しなさい。
         *     また、課題の画像と同じ表示になるように
         *     printFruitsの引数にはFruitsConstantsに指定されている定数を設定してください。
         */

        Fruits Fr = new Fruits();
        
        Fr.printFruits("レモン", 20);
        
        
        
    }
}
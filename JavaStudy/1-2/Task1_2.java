/**
 * Task1-2 : 課題内容
 *
 * 本課題では、配列の使い方を学んでいきましょう。
 * 問①から問⑥まであります。
 * 指定された値と変数名を守って記述してください。
 *
 * 問⑤,⑥については、コメントを入れてください。
 *
 */
public class Task1_2 {

    public static void main(String[] args) {

        // ①「JAPAN」、「AMERICA」、「KOREA」を要素の値（初期値）とする配列 countryを作成しなさい。
        String country[] = {"JAPAN", "AMERICA", "KOREA"};
        // ② ①で作成した配列の要素数を出力してください。
        System.out.println(country.length);
        /* ③下記の値を保持した、要素数3のStringクラスの配列strArrayを作成しなさい。
         *   1番目（先頭）の要素に 「りんご」 を代入
         *   2番目の要素に 「もも」 を代入
         *   3番目の要素に 「ぶどう」 を代入
         */
        String[] StrArray = new String[3];
        StrArray[0] = "りんご";
        StrArray[1] = "もも";
        StrArray[2] = "ぶどう";

        // ④ ③で作成した配列の2番目の要素を出力しなさい。
        System.out.println(StrArray[1]);
        /* ⑤下記の処理について、何をしているのかコメントを記入してください。
         *  [ここへ記述]10,20,30,40,50を要素の値（初期値）とする、要素数 5 の intArray という名前のint型配列を宣言
         */
        int[] intArray = { 10, 20, 30, 40, 50 };

        // ⑥下記の処理について、何をしているのかコメントを記入してください。
        // [ここへ記述]intArrayの 2 番目の要素と 5 番目の要素の合計を出力しなさい
        System.out.println(intArray[1] + intArray[4]);

    }
}
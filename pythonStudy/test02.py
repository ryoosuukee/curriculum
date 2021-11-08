# 1.以下のソースをコピーし、test02.pyとして保存しましょう。
# 2.以下の画像の様に処理ができるように、test02.pyに足りないコードを記述しましょう。（下記注釈も参考にしてください。）
# 3.完成したら、Gitで提出しましょう。

# while Trueでその中の処理を繰り返します。while文の処理から抜け出るには「break」と記述します。
# ヒント1：「4」を選択したとき、「例外を発生させませんでした」と表示させたのちに「break」と記述しましょう。
# ヒント2：except文にて、「except 例外名 as 変数名」と記述し、例外についての情報を持つオブジェクト（ここでは e としましょう）を作成し、
# 「print(e.args)」と記述することで、その例外についての詳細情報を画面に表示させることができます。




while True:
    try:
        print()
        print('1: ValueError例外を発生')
        print('2: IndexError例外を発生')
        print('3: 例外を発生させない')
        print('4: 終了')
        number = int(input('選択してください。: '))
        # 問①：if文を用いて、以下の画像のように処理されるように記述しましょう。
        ##ここに書く

        if number == 1:
            print('↓')
            exc = int("hoge") #ValueError
            print('↓')
            print("もう一度選択しましょう")

        elif number == 2:
            print('↓')
            exc = "str"[5] #IndexError
            print('↓')
            print("もう一度選択しましょう")

        elif number == 3:
            print('↓')
            print("例外を発生させませんでした")
            print('↓')
            print("もう一度選択しましょう")

         # 問②：else節を用いて、以下の画像のように処理されるように記述しましょう。
    ##ここに書く

        else:   
            print('↓')
            print("終了します")

            break
        
    except ValueError as v:
        print("Value Error")
        print(v.args)
        print('↓')
        print("もう一度選択しましょう")
        continue

    except IndexError as i:
        print("Index Error")
        print(i.args)
        print('↓')
        print("もう一度選択しましょう")
        continue

print('↓')
print('無限ループを終了します')
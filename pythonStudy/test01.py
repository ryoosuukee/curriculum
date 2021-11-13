# 1.以下のソースをコピーし、test01.pyとして保存しましょう。
# 2.test01.py中の問の部分を埋め、コードを完成させましょう。
# 3.完成したら、Gitで提出しましょう。

#test01.py

import random
answer = random.randint(1, 10)

while True:  # 無限ループ
    try:
        number = int(input('10までの数値を入力してください: '))
        # 問①：ValueError例外を処理するコードを記述してください。

    except ValueError:
        lan = str(input("数字以外が入力されました。数字のみを入力してください"))

        continue
        
    if answer< number:
        print('もっと小さな数値です')
        # 問②：画像のように表示するように、コードを記述してください。

    elif answer > number:
        print("もっと大きな値です")

    else:
        break  # 変数answerの値と変数numberの値が等しければ終了

print('正解！')
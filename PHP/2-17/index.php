<?php

    $total = 0;
    for ($i = 1; $i <= 40; $i++) {
        $n = mt_rand(1, 6);
        $total += $n;
        echo "{$i}回目={$n}";
        echo "<br>";
        
        if ($total >= 40) {
            echo "合計{$i}回でゴールしました";
            echo "<br>";
            break;
        }
    }

?><br>

<?php
//朝４〜１１時
//昼１１〜１７時
//夜１７〜４時

    date_default_timezone_set('Asia/Tokyo');
    $time=intval(date('H'));
    if(4<=$time && $time<=11){
        echo "今{$time}時台です";
        echo "<br>";
        echo "おはようございます";
    }else if(12<=$time && $time<=17 ){
        echo "今{$time}時台です";
        echo "<br>";
        echo "こんにちは";
    }else{
        echo "今{$time}時台です";
        echo "<br>";
        echo "こんばんは";
    }

?>
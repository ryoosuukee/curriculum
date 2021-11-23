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

?>
<?php
    $x = 7.9;
    echo ceil($x);
?><br>

<?php
    $x = 7.4;
    echo floor($x);
?><br>

<?php
    $x = 5.8;
    echo round($x);
?><br>

<?php
    echo pi();

    function circleArea($r){
        $circle_area = $r * $r * pi();
        echo $circle_area;
    }
    //半径が5の円の面積の計算
    circleArea(5);
?><br>

<?php
    echo mt_rand(1, 250);
?><br>

<?php
    $str = "curriculum";
    echo strlen($str);
?><br>

<?php
    $str = "curriculum";
    echo strpos($str, "l");
?><br>

<?php
    $str = "curriculum";
    echo substr($str, -5, 2);
?><br>

<?php
    $str = "curriculum";
    echo str_replace("c", "C", $str);
?><br>

<?php
    $name = "内田さん";
    $maximum_score = 99;
    //echo $name. "の最高得点は" .$maximum_score. "です";
    printf("%sの最高得点は%dです", $name, $maximum_score);
?><br>

<?php
    $minimum_point = 1;
    $maximum_point = 10;
    printf("参加者の最小得点は%d、最高得点は%dです", $minimum_point, $maximum_point);
    
    $point_area = sprintf("参加者の最小得点は%02d、最高得点は%02dです", $minimum_point, $maximum_point);
    echo $point_area;
?>
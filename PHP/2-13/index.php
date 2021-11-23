<?php
    $x = 7.9;
    echo ceil($x);
?>

<?php
    $x = 7.4;
    echo floor($x);
?>

<?php
    $x = 5.8;
    echo round($x);
?>

<?php
    echo pi();

    function circleArea($r){
        $circle_area = $r * $r * pi();
        echo $circle_area;
    }
    //半径が5の円の面積の計算
    circleArea(5);
?>

<?php
    echo mt_rand(1, 250);
?>

<?php
    $str = "curriculum";
    echo strlen($str);
?>

<?php
    $str = "curriculum";
    echo strpos($str, "l");
?>

<?php
    $str = "curriculum";
    echo substr($str, -5, 0);
?>

<?php
    $str = "curriculum";
    echo = str_replace("c", "C", $str);
?>

<?php
    $name = "内田さん";
    $maximum_score = 99;
    //echo $name. "の最高得点は" .$maximum_score. "です";
    printf("%sの最高得点は%dです", $name, $maximum_score);
?>

<?php
    $minimum_point = 1;
    $maximum_point = 10;
    printf("参加者の最小得点は%d、最高得点は%dです", $minimum_point, $maximum_point);

    $point_area = sprintf("参加者の最小得点は%d、最高得点は%dです", $minimum_point, $maximum_point);
    echo $point_area;
?>
<?php
    $scores = [23, 44, 56, 68, 79];
    echo count($scores);
?><br>

<?php
    $scores = [23, 44, 56, 68, 79];
    sort($scores);
    var_dump($scores);
?><br>

<?php
    $scores = [23, 44, 56, 68, 79];
    var_dump(in_array(68, $scores));
?><br>

<?php
    $members = ["suzuki", "uchida", "hayami", "ishihara", "takeuchi"];
    $atstr = implode("@", $members);
    var_dump($atstr);
?><br>

<?php
    $members = ["suzuki", "uchida", "hayami", "ishihara", "takeuchi"];
    $atstr = implode("@", $members);
    var_dump($atstr);

    $re_members = explode("@", $atstr);
    var_dump($re_members);
?><br>
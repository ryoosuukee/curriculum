<?php
    $my_name = $_POST['my_name'];
    $present = $_POST['present'];
    $quantity = $_POST['quantity'];
    // $hidden_param = $_POST['hidden_param'];
    ?>
    <p>お名前：<?php echo $my_name; ?></p>
    <p>ご希望景品<?php echo $present; ?></p>
    <p>個数：<?php echo $quantity; ?></p>
    <!-- <p>性別は<?php echo $hidden_param; ?>です。</p> -->
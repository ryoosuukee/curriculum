<?php


function getRectangularVolume($vertical, $horizontal, $height){
    $volume = $vertical * $horizontal * $height;
    echo $volume;
}

getRectangularVolume(5,10,8);

?>

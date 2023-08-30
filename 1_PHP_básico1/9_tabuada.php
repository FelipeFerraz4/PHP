<?php
    $number = 7;

    echo "Tabuada do $number" . PHP_EOL;

    for ($i = 0; $i <= 10; $i++){
        $value = $number * $i;
        echo "$number x $i\t== $value" .PHP_EOL;
    }
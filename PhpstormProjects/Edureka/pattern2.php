<?php

$i = 0;
$j = 0;

for (; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}for($i=5;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
   echo "\n";
}


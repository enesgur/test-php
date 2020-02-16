<?php

$i = 0;
$a = [];
while($i <= 10000000) {
    $a[] = $i;
    $a[] = json_encode($a);
    $i++;
}


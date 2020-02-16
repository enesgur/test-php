<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit',-1);

$i = 0;
$a = [];
while($i <= 100) {
    $a[] = $i;
    $a[] = json_encode($a);
    $i++;
}
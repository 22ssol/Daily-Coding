<?php

fscanf(STDIN, "%d %d", $n1, $n2);
$a = 0;
$b = 0;
$n = 0;
if ($n1 > $n2) {
    $a = $n1;
    $b = $n2;
} else {
    $a = $n2;
    $b = $n1;
}

while ($b != 0) { //유클리드 알고리즘(최대공약수 구하는 알고리즘)
    $n = $a % $b;
    $a = $b;
    $b = $n;
}

$gcm = $a; //최대공약수

$lcm = $n1 * $n2 / $a; //최소공배수

print($gcm . "\n" . $lcm);
?>

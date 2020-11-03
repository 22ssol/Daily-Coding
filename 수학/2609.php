<?php
fscanf(STDIN, "%d", $n);
$n1 = array();
$n2 = array();
$gcm = array();

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d %d", $n1[], $n2[]);
}

for ($i = 0; $i < $n; $i++) {
    $max = 0;
    $min = 0;
    $temp = 0;

    if ($n1[$i] > $n2[$i]) {
        $max = $n1[$i];
        $min = $n2[$i];
    } else {
        $max = $n2[$i];
        $min = $n1[$i];
    }


    while ($min != 0) { //유클리드 알고리즘(최대공약수 구하는 알고리즘)
        $temp = $max % $min;
        $max = $min;
        $min = $temp;
    }
    array_push($gcm, $max);
    $lcm = $n1[$i] * $n2[$i] / $gcm[$i]; //최소공배수
    print($lcm."\n");

}


?>
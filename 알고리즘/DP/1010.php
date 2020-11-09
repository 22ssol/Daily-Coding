<?php
fscanf(STDIN, "%d", $t);
$n = array();
$m = array();

for($i=0;$i<$t;$i++){
    fscanf(STDIN, "%d %d", $n[], $m[]);
}

for($j=0;$j<$t;$j++){
   echo fac($m[$j]) / (fac($n[$j]) * fac($m[$j] - $n[$j]))."\n";

}
function fac($n){
    $sum = 1;
    for($i=1;$i<=$n;$i++){
        $sum = $sum * $i;
    }
    return $sum;
}
?>
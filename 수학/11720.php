<?php
fscanf(STDIN, "%d", $n);

$sum = 0;
fscanf(STDIN, "%s", $num);

for($i=0;$i<$n;$i++) {
    $str_cut[$i] = substr($num,$i,1);
    $sum = $sum + $str_cut[$i] ;
}

print($sum);

?>
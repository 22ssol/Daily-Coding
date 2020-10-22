<?php
fscanf(STDIN, "%d", $n);
$money = 1000 -$n;
$change = [500,100,50,10,5,1];
$result = 0;

for($i=0;$i<count($change);$i++){
    if($money >= $change[$i]){
        $result = sprintf('%d', $money / $change[$i]) + $result;
        $money = $money % $change[$i];
    }

}
echo sprintf('%d', $result);
?>
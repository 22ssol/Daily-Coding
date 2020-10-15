<?php
fscanf(STDIN, "%d %d %d %d %d", $a, $b, $c, $x, $y);

//ex1 - 양념,후라이드로만 구매하는 방법
$price1 = ($a * $x) + ($b * $y);

//ex2 - 양념,후라이드,반반 섞어서 구매하는 방법
if($x >$y){
    $min = $y;
    $na = $x;
    $na_price = $a;
}else{
    $min = $x;
    $na = $y;
    $na_price = $b;
}
$price2 = (2 * $min * $c) + ($na-$min) * $na_price;

//ex3 - 반반으로만 구매하는 방법
$price3 = (2 * $min * $c) + ($na-$min) * 2 * $c;

$price = [$price1,$price2,$price3];
printf(min($price));
?>
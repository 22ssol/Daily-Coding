<?php
fscanf(STDIN, "%d", $n);

$caseX = array();
$caseY = array();

for($i=0;$i<$n;$i++){
    fscanf(STDIN, "%d", $c);
    for($j=0;$j<$c;$j++){
        fscanf(STDIN, "%lf %lf", $caseX[$i][], $caseY[$i][]);
    }
}

for($i=0;$i<$c;$i++){
    $area = abs(max($caseX[$i]) - min($caseX[$i])) *  abs(max($caseY[$i]) - min($caseY[$i]));
    $meter = 2 * (abs(max($caseX[$i]) - min($caseX[$i])) +  abs(max($caseY[$i]) - min($caseY[$i])));

    print("Case ".($i+1).": Area ".abs($area).", Perimeter ".abs($meter)."\n");
}

?>
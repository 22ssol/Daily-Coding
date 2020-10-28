<?php
fscanf(STDIN, "%d", $n);

$str = array();
$sum = 0;
$group = array();

for($i=0;$i<$n;$i++){
    fscanf(STDIN, "%s", $str[]);
}

for($i=0;$i<$n;$i++) {
    $temp = array();
    for($j=0;$j<strlen($str[$i]);$j++) {
        $temp[$j] = substr($str[$i],$j,1);
    }
    array_push($group,$temp);
}
print_r($group);

?>
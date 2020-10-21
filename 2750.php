<?php
fscanf(STDIN, "%s", $n);
$num = array();
for($i=0;$i<$n;$i++){
    fscanf(STDIN, "%s", $num[]);
}
//print_r($num);
//echo sort($num);
sort($num);  //오름차순 정렬
$num2 = array_unique($num); // 중복제거


for($i=0;$i<$n;$i++){
    if(isset($num2[$i])){
        print($num2[$i]."\n");
    }
}
?>
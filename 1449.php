<?php

fscanf(STDIN, "%d %d", $n, $l);

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d", $location[]);
}

sort($location); // 1.배열 정렬
print_r($location);

$count = 0;
$s = $location[0]; // 시작점

for($i=0;$i<$n;$i++){ // 물 새는 위치만큼 반복

    if($s <= $location[$i]){
        $count ++;
        $s = $location[$i+1] +$l-1;
    }
}

echo $count;

?>
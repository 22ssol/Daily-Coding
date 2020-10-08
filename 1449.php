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

    $min = $location[$i] - 1 ; //물 막는 곳 최소
    $max = $min + $l; // 물 막는 곳 최대

    if($min < $s ){ // 최소 < 시작점
       // $count ++;
        if($max > $location[$i+1]){
            $s = $location[$i+2];
            $count ++;
        }
    }


}

echo $count;

?>
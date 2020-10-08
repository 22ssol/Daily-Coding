<?php

fscanf(STDIN, "%d %d", $n, $l);

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d", $location[]);
}

sort($location); // 1.배열 정렬
print_r($location);

$count = 0;

for($i=0;$i<$n;$i++){ // 물 새는 위치만큼 반복
    $s = $location[$i]; // 시작점
    $min = $location[$i] - 1 ; //물 새는 곳 최소
    $max = $min + $l; // 물 새는 곳 최대

    if($min < $s ){ // 최소 < 시작점

        echo $s;
        $count ++; // 테이프 사용 추가
        $s = $location[$i+1];
    }

}

echo $count;

?>